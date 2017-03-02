<?php
if ( $this->Session->read('promp') ) {
	echo $this->Session->read('promp');
	unset($_SESSION['promp']); 
}
?>

<body style="background-color:#eeeeee">
<div class="container">
 <!-- Container -->
<!-- second row -->
	<div class="col-sm-7">
	     <center>
		<h2>Create your own account.</h2> 
			<?php 
				echo $this->Html->image('eco.gif',array('height'=>'250px'));
			?>
			</center>
	</div> 
	<!-- third column -->
	
	<div class='col-sm-5' style="border-radius:0.6em;background-color:#ffffff;box-shadow:0px 1px 1px 0px ">

		<h3>Sign Up</h3>
		<?php echo $this->Session->flash(); ?>
			<?php
				echo $this->Form->create('User');
				
        		echo "<div class='row'><div class='col-sm-6'>".$this->Form->input('fname', array(
        									'class'=>'form-control input-md',
        									'placeholder'=>'First name',
        									'label'=>''
													   ))."</div>";
        		echo "<div class='col-sm-6'>".$this->Form->input('lname', array(
        							    	'class'=>'form-control input-md',
        							    	'placeholder'=>'Last name',
											'label'=>''
													   ))."</div></div>";
        		echo $this->Form->input('email', array(
											'class'=>'form-control input-md',
											'placeholder'=>'Email',
											'label'=>''));
        		echo "<div class='row'><div class='col-sm-3'>".$this->Form->input('phone1', array(
												'options'=>array(
													'0905' => '0905',
													'0906' => '0906',
													'0907' => '0907',
													'0908' => '0908',
													'0909' => '0909',
													'0910' => '0910',
													'0911' => '0911',
													'0912' => '0912',
													'0913' => '0913',
													'0914' => '0914',
													'0915' => '0915',
													'0916' => '0916',
													'0917' => '0917',
													'0918' => '0918',
													'0919' => '0919',
													'0920' => '0920',
													'0921' => '0921',
													'0922' => '0923',
													'0923' => '0923',
													'0924' => '0924',
													'0925' => '0925',
													'0926' => '0926',
													'0927' => '0927',
													'0928' => '0928',
													'0929' => '0929',
													'0930' => '0930',
													'0931' => '0931',
													'0932' => '0932',
													'0933' => '0933',
													'0934' => '0934',
													'0935' => '0935',
													'0936' => '0936',
													'0937' => '0937',
													'0938' => '0938',
													'0939' => '0939',
													'0942' => '0942',
													'0943' => '0943',
													'0946' => '0946',
													'0947' => '0947',
													'0948' => '0948',
													'0949' => '0949',
													'0975' => '0975',
													'0977' => '0977',
													'0989' => '0989',
													'0994' => '0994',
													'0996' => '0996',
													'0997' => '0997',
													'0998' => '0998',
													'0999' => '0999'
													),
													'label' => '',
													'class'=>'form-control input-md'
													   ))."</div>";
				echo "<div class='col-sm-9'>".$this->Form->input('phone2', array(
												'class'=>'form-control input-md',
												'style'=>'margin-left:-33px;',
												'label'=>'',
												'placeholder'=>'Phone'
											))."</div></div>";
				echo $this->Form->input('phone_verification',array('type' =>'hidden', 
														'value' => rand(10,100000)));
				echo $this->Form->input('username', array(
											'class'=>'form-control input-md',
											'placeholder'=>'Username',
											'label'=>''
													   ));
				echo $this->Form->input('password', array(
											'class'=>'form-control input-md',
											'placeholder'=>'Password',
											'label'=>''
													   ));
				echo $this->Form->input('confirm_password', array(
											'type'=>'password',
											'class'=>'form-control input-md',
				 							'placeholder'=>'Confirm Password',
											'label'=>''
												   ))."<br/>";
				echo "<h4>"."Birthday"."</h4>";
				echo "<div class='row'>";
				echo "<div class='col-sm-3'>";
				echo $this->Form->input('month', array(
												'options'=>array(
													'' => 'Month',
													'January' => 'Jan',
													'February' => 'Feb',
													'March' => 'Mar',
													'April' => 'Apr',
													'May' => 'May',
													'June' => 'Jun',
													'July' => 'Jul',
													'August' => 'Aug',
													'September' => 'Sep',
													'October' => 'Oct',
													'November' => 'Nov',
													'December' => 'Dec'),
													'label' => '',
													'style'=>'width: 75px;height: 30px'
													   ));
				echo "</div>";
				echo "<div class='col-sm-3'>";
				echo $this->Form->input('day', array(
												'options'=>array(
													'' => 'Day',
													1 => '1',
													2 => '2',
													3 => '3',
													4 => '4',
													5 => '5',
													6 => '6',
													7 => '7',
													8 => '8',
													9 => '9',
													10 => '10',
													11 => '11',
													12 => '12',
													13 => '13',
													14 => '14',
													15 => '15',
													16=> '16',
													17=> '17',
													18=> '18',
													19=> '19',
													20=> '20',
													21=> '21',
													22 => '22',
													23 => '23',
													24 => '24',
													25 => '25',
													26 => '26',
													27 => '27',
													28 => '28',
													29=> '29',
													30 => '30',
													31=> '31',
													),
													'label' => '',
													'style'=>'width: 75px;height: 30px'
												
													   ));
				echo "</div>";
				echo "<div class='col-sm-3'>";
				echo $this->Form->input('year', array(
												'options'=>array(
													'' => 'Year',
													2015 => '2015',
													2014 => '2014',
													2013 => '2013',
													2012 => '2012',
													2011 => '2011',
													2010 => '2010',
													2009 => '2009',
													2008 => '2008',
													2007 => '2007',
													2006 => '2006',
													2005 => '2005',
													2004 => '2004',
													2003 => '2003',
													2002 => '2002',
													2001 => '2001',
													2000 => '2000',
													1999 => '1999',
													1998 => '1998',
													1997 => '1997',
													1996 => '1996',
													1995 => '1995',
													1994 => '1994',
													1993 => '1993',
													1992 => '1992',
													1991 => '1991',
													1990 => '1990',
													1989 => '1989',
													1988 => '1988',
													1987 => '1987',
													1986 => '1986',
													1985 => '1985',
													1984 => '1984',
													1983 => '1983',
													1982 => '1982',
													1981 => '1981',
													1980 => '1980',
													1979 => '1979',
													1978 => '1978',
													1977 => '1977',
													1976 => '1976',
													1975 => '1975',
													1974 => '1974',
													1973 => '1973',
													1972 => '1972',
													1971 => '1971',
													1970 => '1970',
													1969 => '1969',
													1968 => '1968',
													1967 => '1967',
													1966 => '1966',
													1965 => '1965',
													1964 => '1964',
													1963 => '1963',
													1962 => '1962',
													1961 => '1961',
													1960 => '1960',
													1959 => '1959',
													1958 => '1958',
													1957 => '1957',
													1956 => '1956',
													1955 => '1955',
													1954 => '1954',
													1953 => '1953',
													1952 => '1952',
													1951 => '1951',
													1950 => '1950',
													1949 => '1949',
													1948 => '1948',
													1947 => '1947',
													1946 => '1946',
													1945 => '1945',
													1944 => '1944',
													1943 => '1943',
													1942 => '1942',
													1941 => '1941',
													1940 => '1940',
													1939 => '1939',
													1938 => '1938',
													1937 => '1937',
													1936 => '1936',
													1935 => '1935',
													1934 => '1934',
													1933 => '1933',
													1932 => '1932',
													1931 => '1931',
													1930 => '1930',
													1929 => '1929',
													1928 => '1928',
													1927 => '1927',
													1926 => '1926',
													1925 => '1925',
													1924 => '1924',
													1923 => '1923',
													1922 => '1922',
													1921 => '1921',
													1920 => '1920',
													),
													'label' => '',
													'style'=>'width: 75px;height: 30px'
													   ));
				echo "</div>";
				echo "</div>";
				echo $this->Form->radio('gender',array('Male'=>'Male','Female'=>'Female'))."<br/>";
				echo "<div class='g-recaptcha' data-sitekey='6Le3ZwwTAAAAAFqJFVs8gpm4JrEWUe8TUL1WWVTo' name='recaptcha'></div>";
				// $this->Captcha->render();
				echo $this->Form->submit('Register', array(
											'class'=>'btn btn-success btn-lg btn-block'
											           ))."<br />";
				
			?>
	</div>
</div> <!-- end container -->
<footer>
	<!-- container -->
	<div class="container text-center">
		<hr>
			<p>&copy; Copyright 2015.</p>
	</div> <!-- end container -->
</footer>
</body>
</html>
    
