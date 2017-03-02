<?php

class ChikkaSMS {

    //authorization
    private $clientId = 'c1e4405af0e3c2cb003ab99b4ee45bc76e83b065e03a4c76cc982e170c97cbc5';
    private $secretKey = '49f09da3a4d008dccac22635e523330d186b8443773fff8b5297d9106e87969d';
    private $shortCode = '2929030850';
    private $sslVerify = false;
    
    //Chikka's default URI for sending SMS
    private $chikkaSendUrl = 'https://post.chikka.com/smsapi/request';
    
    private $sendRequest = 'send';
    private $receiveRequest = 'incoming';
    private $replyRequest = 'reply';
    private $notificationRequest = 'outgoing';

    //Based from Chikka's price breakdown
    private $requestCost = array(
        'free' => 'FREE', 
        '1' =>1, 
        '2.5'=> 2.5, 
        '5'=> 5, 
        '10' => 10, 
        '15' => 15
        );
    
    private $expectedChikkaResponse = array(
        'message_type'=>'SEND',
        'short_code' => '2929030850',
        'message_id' => '34343224',
        'status' => '',
        'credits_cost' => '',
        'timestamp' => '');
    
    private $responseAccepted = array(
        'status' => 'Accepted',
        'message' => 'Message has been successfully processed.',
        'code' => 202
        );
    
    private $responseDenied = array(
        'status' => 'Error',
        'message' => 'Message has not been processed.',
        'code' => 400
        );
    
    public function __construct($clientId, $secretKey, $shortCode){
        $this->clientId = $clientId;
        $this->secretKey = $secretKey;
        $this->shortCode = $shortCode;
    }
    
    public function sendText($messageID, $to, $message) {
        $messageID = strip_tags($messageID);

        //Request ID should not be blank
        if(strlen($messageID) < 1){
            trigger_error('Message ID is required');
            return false;
        }
        
        // Making sure strings are UTF-8 encoded
        if (!is_numeric($to) && !mb_check_encoding($to, 'UTF-8')) {
            trigger_error('TO needs to be a valid UTF-8 encoded string');
            return false;
        }

        if (!mb_check_encoding($message, 'UTF-8')) {
            trigger_error('Message needs to be a valid UTF-8 encoded string');
            return false;
        }
        
        //urlencode 
        // $message = urlencode($message);

        //sendText post params
        $sendData = array(
            'message_type' => $this->sendRequest,
            'mobile_number' => $to,
            'shortcode' => $this->shortCode,
            'message_id' => $messageID,
            'message' => $message
            );
        
        //send Api request to Chikka and process it 
        return $this->sendApiRequest($sendData);
    }

    private function sendApiRequest($data){
        $data = array_merge($data, array('client_id'=>$this->clientId, 'secret_key' => $this->secretKey));
        //  build a request query from arrays of data 
        $post = http_build_query($data);

        // If available, use CURL
        if (function_exists('curl_version')) {

            $to_chikka = curl_init( $this->chikkaSendUrl );
            curl_setopt( $to_chikka, CURLOPT_POST, true );
            curl_setopt( $to_chikka, CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $to_chikka, CURLOPT_POSTFIELDS, $post );

            if (!$this->sslVerify) {
                curl_setopt( $to_chikka, CURLOPT_SSL_VERIFYPEER, false);
            }

            $from_chikka = curl_exec( $to_chikka );
            curl_close ( $to_chikka );

        } elseif (ini_get('allow_url_fopen')) {
            // No CURL available so try the awesome file_get_contents
            $opts = array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $post
                )
            );
            $context = stream_context_create($opts);
            $from_chikka = file_get_contents($this->chikkaSendUrl, false, $context);

        } else {
            // No way of sending a HTTP post :(
            return false;
        }

        return $this->parseApiResponse($from_chikka, $data['message_type']);
    }

    private function parseApiResponse($response, $requestType = null){
        $response = json_decode($response,true);
        if($requestType){
            $response['request_type'] = $requestType;
        }
        
        return json_decode(json_encode($response));;
    }

}

?>
