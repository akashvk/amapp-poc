<?php 

$cday =$_GET['action'];

if(isset($_GET['action']) )
{
	if(is_file("../calendar-daily/images-m/$cday.jpg"))
	{
		$OUT['STATUS']=date("d-m-Y",filemtime ("../calendar-daily/images-m/$cday.jpg"));
		$OUT['DATA']=base64_encode(file_get_contents("../calendar-daily/images-m/$cday.jpg"));
	}else{
		$OUT['STATUS']="NOT";
	}
}else{
		$OUT['STATUS']="NOT";
}
echo json_encode($OUT);

?>
