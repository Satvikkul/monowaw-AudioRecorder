<?php
// manage/process and store streams
foreach($_POST as $k => $p){
 if($k=='base64data'){
 	$w3stream = substr(trim($p), 22);
 	$w3stream = base64_decode($w3stream);
 } else {
	 $fname = $p;
  }
}
if(!file_put_contents( "./".$fname, $w3stream )){
 echo"w3FWerror - the file not createt"; // ERROR: the file has not been created
	exit;
}


?>
