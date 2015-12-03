<?php 
foreach($_GET as $K=>$v)
{
	$_POST[$K]=$v;
}
$cyear = $_POST['year'];
$cmonth = $_POST['month'];
if(strlen($cmonth)==1)
{
	$cmonth='0'.$cmonth;
}
$cname = $cyear.'_'.$cmonth;


//echo $cname;

if(isset($_GET['action']))
{

	if(is_file("../downloads/calendar/$cyear/m/$cname.jpg"))
	{
	
		$OUT['STATUS']=date("d-m-Y",filemtime ("../downloads/calendar/$cyear/m/$cname.jpg"));
	
		$OUT['DATA']=base64_encode(file_get_contents("../downloads/calendar/$cyear/m/$cname.jpg"));
	}else{
		$OUT['STATUS']="NOT";
	}
}else{
		$OUT['STATUS']="NOT";
}
echo json_encode($OUT);

?>
