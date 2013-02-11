
<?php
	//Only sends response if there's an error
	//print_r($_POST);
	move_uploaded_file($_FILES["audio"]["tmp_name"],"voices_for_change/" . $_POST['name'] . ".wav");
	$filename = "voices_for_change/" . $_POST['name'] . ".wav";
	//echo "Stored in: " . $filename;

	$to = "erase_the_border@vojo.co";
	$cc = "kanarinka@gmail.com";
	$from = "www-data@brownbag.me";
	$subject = $_POST['signature'];
	$message = "A voice for change";

	$separator = md5(time());

	// carriage return type (we use a PHP end of line constant)
	$eol = PHP_EOL;

	
	$attachment = chunk_split(base64_encode(file_get_contents($filename)));

	// main header
	$headers  = "From: ".$from.$eol;
	$headers .= "CC: ".$cc.$eol;
	$headers .= "MIME-Version: 1.0".$eol; 
	$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

	// no more headers after this, we start the body! //

	$body = "--".$separator.$eol;
	$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
	//$body .= "This is a MIME encoded message.".$eol;

	// message
	$body .= "--".$separator.$eol;
	$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
	$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
	$body .= $message.$eol;

	// attachment
	$body .= "--".$separator.$eol;
	$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
	$body .= "Content-Transfer-Encoding: base64".$eol;
	$body .= "Content-Disposition: attachment".$eol.$eol;
	$body .= $attachment.$eol;
	$body .= "--".$separator."--";

	// send message
	if (mail($to, $subject, $body, $headers)) {
	    //echo "mail send ... OK";
	} else {
	    echo "Sorry! There was an error mailing your file to Vojo!";
	}

?>     

