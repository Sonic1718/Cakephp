<?php

$html = "
	   			<br><br>
	   			<div style='text-align:center; font-size:18px;'>
	   				<p><b>List for Requirements for</b></p>
	   			</div>
	   			<div style='text-align:center; margin-top:-40px;'>____________________________________</div>
	   			<div style='text-align:center; font-size:18px; margin-top:-20px;'>
	   				<p><b>Certificate of Registration as Lumber Dealer</b></p>
	   			</div>
	   			<div style='text-align:center; margin-top:-40px;'>_____________________________________________________________</div>
	   			<div style='text-align:center; margin-top:6px;'>___________________________________________________________________________________________</div>
	   			<br>
	   			<div style='text-indent:40px;'><u>".$result['Forestcert']['establishment']."</u></div>
	   			<div style='text-indent:40px; margin-top:-16px;'>
	   				<p>(Name of establishment)</p>
				</div>
				<br>
				<div style='text-indent:40px; margin-top:-20px;'><u>".$result['Forestcert']['address']."</u></div>
				<div style='text-indent:80px; margin-top:-18px;'>
					<p>(Address)</p>
				</div>
				<br>
				<div style='text-indent:44px; margin-top:-30px;'>
					<p>New applicant <u>".$result['Forestcert']['name']."</u></p>
				</div>

				<div style='text-indent:40px;'>
					<p>______________________&nbsp;&nbsp;  1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lumber Supply Contract</p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p>Supplier : <u>".$result['Forestcert']['supplier']."</u></p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p style='margin-top:14px;'>WPPP : <u>".$result['Forestcert']['wppp']."</u></p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p style='margin-top:14px;'>Volume/Duration :<u>".$result['Forestcert']['volume/duration']."</u></p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>_____________________&nbsp;&nbsp; 2.&nbsp;&nbsp;&nbsp;&nbsp; Fees:</p>
				</div>
				<div style='text-indent:280px; margin-top:-30px;'>
					<p>Oath . . . . . . . . . . . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;P 36.00</p>
				</div>
				<div style='text-indent:280px; margin-top:-40px;'>
					<p>Application . . . . . . . . . .&nbsp;&nbsp;&nbsp; P 600.00</p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p>Permit/Registration . . . . &nbsp;P 480.00</p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p><b>TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P 1,116.00</b></p>
				</div>
				<div style='text-indent:240px; margin-top:-50px;'><p><b>_____________________________________________</b></p></div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>_____________________&nbsp;&nbsp; 3.&nbsp;&nbsp;&nbsp;&nbsp; ( ) Forestry Bond&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( ) Cash Bond</p>
				</div>
				<div style='text-indent:240px; margin-top:-36px;'>
					<p>Amount (P) 2,000.00 Amount (P) 1,000.00</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;4. &nbsp;&nbsp;&nbsp;Two (2) pictures of the establishment including the lumberyard</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;5. &nbsp;&nbsp;&nbsp;Mayor’s Permit for the current year (machine copy)</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;6. &nbsp;&nbsp;&nbsp;BIR Income Tax Return for the previous year ending 
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(machine copy)</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;7. &nbsp;&nbsp;&nbsp;Annual Business Plan</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;8. &nbsp;&nbsp;&nbsp;Business Trade Name or Security and Exchange Commission<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Article of Incorporation (machine copy)</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;9. &nbsp;&nbsp;&nbsp;List of Employees</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;10. &nbsp;&nbsp;&nbsp;Documentary stamps ( 3 pcs.)</p>
				</div>


	   		";







$paper_size='';
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>