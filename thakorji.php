<?php 

if($_GET['action'] == 'status')
{
	echo date("d-m-Y",filemtime ("../thakorjitoday/".$_GET['location']."/images/".$_GET['image'].".jpg"));
	exit();
}


if($_GET['action'] == 'mogri1')
{

         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god01L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god01L.jpg"));
	}
}
elseif($_GET['action'] == 'mogri2')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god01.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god01.jpg"));	

}
elseif($_GET['action'] == 'mogri3')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god02L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god02L.jpg"));	

}
elseif($_GET['action'] == 'mogri4')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god02.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god02.jpg"));	

}
elseif($_GET['action'] == 'mogri5')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god03L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god03L.jpg"));	

}
elseif($_GET['action'] == 'mogri6')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god03.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god03.jpg"));	

}
elseif($_GET['action'] == 'mogri7')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god04L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god04L.jpg"));	

}
elseif($_GET['action'] == 'mogri8')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god04.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god04.jpg"));	

}
elseif($_GET['action'] == 'mogri9')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god05L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god05L.jpg"));	

}
elseif($_GET['action'] == 'mogri10')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god05.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god05.jpg"));	

}
elseif($_GET['action'] == 'mogri11')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god06L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god06L.jpg"));	

}
elseif($_GET['action'] == 'mogri12')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god06.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god06.jpg"));	

}
elseif($_GET['action'] == 'mogri13')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god07L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god07L.jpg"));	

}
elseif($_GET['action'] == 'mogri14')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/india/images/god07.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/india/images/god07.jpg"));	

}
elseif($_GET['action'] == 'kharghar1')
{

         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god01L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god01L.jpg"));
	}
}
elseif($_GET['action'] == 'kharghar2')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god01.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god01.jpg"));	

}
elseif($_GET['action'] == 'kharghar3')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god02L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god02L.jpg"));	

}
elseif($_GET['action'] == 'kharghar4')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god02.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god02.jpg"));	

}
elseif($_GET['action'] == 'kharghar5')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god03L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god03L.jpg"));	

}
elseif($_GET['action'] == 'kharghar6')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god03.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god03.jpg"));	

}
elseif($_GET['action'] == 'kharghar7')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god04L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god04L.jpg"));	

}
elseif($_GET['action'] == 'kharghar8')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god04.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god04.jpg"));	

}
elseif($_GET['action'] == 'kharghar9')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god05L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god05L.jpg"));	

}
elseif($_GET['action'] == 'kharghar10')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god05.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god05.jpg"));	

}
elseif($_GET['action'] == 'kharghar11')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god06L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god06L.jpg"));	

}
elseif($_GET['action'] == 'kharghar12')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god06.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god06.jpg"));	

}
elseif($_GET['action'] == 'kharghar13')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god07L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god07L.jpg"));	

}
elseif($_GET['action'] == 'kharghar14')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/kharghar/images/god07.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/kharghar/images/god07.jpg"));	

}
elseif($_GET['action'] == 'surat1')
{

         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god01L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god01L.jpg"));
	}
}
elseif($_GET['action'] == 'surat2')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god01.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god01.jpg"));	

}
elseif($_GET['action'] == 'surat3')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god02L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god02L.jpg"));	

}
elseif($_GET['action'] == 'surat4')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god02.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god02.jpg"));	

}
elseif($_GET['action'] == 'surat5')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god03L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god03L.jpg"));	

}
elseif($_GET['action'] == 'surat6')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god03.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god03.jpg"));	

}
elseif($_GET['action'] == 'surat7')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god04L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god04L.jpg"));	

}
elseif($_GET['action'] == 'surat8')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god04.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god04.jpg"));	

}
elseif($_GET['action'] == 'surat9')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god05L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god05L.jpg"));	

}
elseif($_GET['action'] == 'surat10')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god05.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god05.jpg"));	

}
elseif($_GET['action'] == 'surat11')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god06L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god06L.jpg"));	

}
elseif($_GET['action'] == 'surat12')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god06.jpg"));
	
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god06.jpg"));	
	
}
elseif($_GET['action'] == 'surat13')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god07L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god07L.jpg"));	

}
elseif($_GET['action'] == 'surat14')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/surat/images/god07.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/surat/images/god07.jpg"));	

}
elseif($_GET['action'] == 'uk1')
{

	
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god01L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god01L.jpg"));
	}
}
elseif($_GET['action'] == 'uk2')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god01.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god01.jpg"));	

}
elseif($_GET['action'] == 'uk3')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god02L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god02L.jpg"));	
	}
}
elseif($_GET['action'] == 'uk4')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god02.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god02.jpg"));	
	}
}
elseif($_GET['action'] == 'uk5')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god03L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god03L.jpg"));	
	}
}
elseif($_GET['action'] == 'uk6')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god03.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god03.jpg"));	

}
elseif($_GET['action'] == 'uk7')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god04L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god04L.jpg"));	
	}
}
elseif($_GET['action'] == 'uk8')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god04.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god04.jpg"));	

}
elseif($_GET['action'] == 'uk9')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god05L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god05L.jpg"));	

}
elseif($_GET['action'] == 'uk10')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god05.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god05.jpg"));	

}
elseif($_GET['action'] == 'uk11')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god06L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god06L.jpg"));	

}
elseif($_GET['action'] == 'uk12')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god06.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god06.jpg"));	

}
elseif($_GET['action'] == 'uk13')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god07L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god07L.jpg"));	

}
elseif($_GET['action'] == 'uk14')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/uk/images/god07.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/uk/images/god07.jpg"));	

}
elseif($_GET['action'] == 'usa1')
{

         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god01L.jpg"));
	if(!$_GET['status']){
         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god01L.jpg"));
	}
}
elseif($_GET['action'] == 'usa2')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god01.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god01.jpg"));	

}
elseif($_GET['action'] == 'usa3')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god02L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god02L.jpg"));	

}
elseif($_GET['action'] == 'usa4')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god02.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god02.jpg"));	

}
elseif($_GET['action'] == 'usa5')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god03L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god03L.jpg"));	

}
elseif($_GET['action'] == 'usa6')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god03.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god03.jpg"));	

}
elseif($_GET['action'] == 'usa7')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god04L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god04L.jpg"));	

}
elseif($_GET['action'] == 'usa8')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god04.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god04.jpg"));	

}
elseif($_GET['action'] == 'usa9')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god05L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god05L.jpg"));	

}
elseif($_GET['action'] == 'usa10')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god05.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god05.jpg"));	

}
elseif($_GET['action'] == 'usa11')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god06L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god06L.jpg"));	

}
elseif($_GET['action'] == 'usa12')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god06.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god06.jpg"));	

}
elseif($_GET['action'] == 'usa13')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god07L.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god07L.jpg"));	

}
elseif($_GET['action'] == 'usa14')
{
 
         $OUT['STATUS']=date("d-m-Y",filemtime ("../thakorjitoday/usa/images/god07.jpg"));

         $OUT['DATA']=base64_encode(file_get_contents("../thakorjitoday/usa/images/god07.jpg"));	

}

echo json_encode($OUT);

?>



<!--action=='mogrimain' , action=='mogrigunatit' justlike that do for all mogri , uk , usa , surat and for all murties big and small files

and IMAGE PATH is sever path from this file please test it porperly and let me know when you complete it -->





