<?php

//while(list($key,$value) = each($_FILES["file"]["name"]))	{
   if(isset($_POST['submit'])){
 if($_FILES['file']['name']!="")
{
if (($_FILES["file"]["type"]== "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"]== "image/png")
&& ($_FILES["file"]["size"] < 2000000))
    {
$source = $_FILES["file"]["tmp_name"];
$filename = $_FILES["file"]["name"] ;
move_uploaded_file($source, $destpath . $filename);
//thumbnail creation start//
$thumb1Temp='../uploads/thumb/gal' .$_FILES["file"]["name"];   // Path where thumb nail image will be stored
$n_width=100;          // Fix the width of the thumb nail images
$n_height=100;         // Fix the height of the thumb nail imaage

/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////
$destpath = '../uploads/large/';
$image1Temp=$destpath . $filename; 
if($_FILES["file"]["type"]=="image/gif"){
//echo "hello";
$im=ImageCreateFromGIF($image1Temp);
$width=ImageSx($im);              // Original picture width is stored
$height=ImageSy($im);            // Original picture height is stored
$newimage=imagecreatetruecolor($n_width,$n_height);
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
if (function_exists("imagegif")) {
Header("Content-type: image/gif");
ImageGIF($newimage,$thumb1Temp);
}
if (function_exists("imagejpeg")) {
Header("Content-type: image/jpeg");
ImageJPEG($newimage,$thumb1Temp);
}
    }
//chmod("$tsrc",0777);
////////// end of gif file thumb nail creation//////////
$n_width=115;          // Fix the width of the thumb nail images
$n_height=115;         // Fix the height of the thumb nail imaage

////////////// starting of JPG thumb nail creation//////////
if($_FILES["file"]["type"]=="image/jpeg"){
    
$im=ImageCreateFromJPEG($image1Temp); 
$width=ImageSx($im);              // Original picture width is stored
$height=ImageSy($im);             // Original picture height is stored
$newimage=imagecreatetruecolor($n_width,$n_height);                 
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
ImageJpeg($newimage,$thumb1Temp);
chmod("$thumb1Temp",0777);
}

////////////////  End of png thumb nail creation //////////
if($_FILES["file"]["type"]=="image/png"){
//echo "hello";
$im=ImageCreateFromPNG($image1Temp);
$width=ImageSx($im);              // Original picture width is stored
$height=ImageSy($im);                  // Original picture height is stored
$newimage=imagecreatetruecolor($n_width,$n_height);
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

if (function_exists("imagepng")) {
//Header("Content-type: image/png");
ImagePNG($newimage,$thumb1Temp);
}

if (function_exists("imagejpeg")) {
//Header("Content-type: image/jpeg");
ImageJPEG($newimage,$thumb1Temp);
}	
    }
    }}
}
?>
