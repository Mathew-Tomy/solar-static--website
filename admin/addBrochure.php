<?php
$destpath = '../uploads/large/br'.date(dmY).date(His);
while(list($key,$value) = each($_FILES["brochure"]["name"]))	{
 if(!empty($value))
{
if (($_FILES["brochure"]["type"][$key] == "image/gif")
|| ($_FILES["brochure"]["type"][$key] == "image/jpeg")
|| ($_FILES["brochure"]["type"][$key] == "image/pjpeg")
|| ($_FILES["brochure"]["type"][$key] == "image/png")
&& ($_FILES["brochure"]["size"][$key] < 2000000))
    {
$source = $_FILES["brochure"]["tmp_name"][$key] ;
$filename = $_FILES["brochure"]["name"][$key] ;
move_uploaded_file($source, $destpath . $filename);
//thumbnail creation start//
$thumb1Temp='../uploads/thumb/br'.date(dmY).date(His) .$_FILES["brochure"]["name"][$key];   // Path where thumb nail image will be stored
$n_width=100;          // Fix the width of the thumb nail images
$n_height=100;         // Fix the height of the thumb nail imaage

/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////
$image1Temp=$destpath . $filename; 
if($_FILES["brochure"]["type"][$key]=="image/gif"){
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
if($_FILES["brochure"]["type"][$key]=="image/jpeg"){
    
$im=ImageCreateFromJPEG($image1Temp); 
$width=ImageSx($im);              // Original picture width is stored
$height=ImageSy($im);             // Original picture height is stored
$newimage=imagecreatetruecolor($n_width,$n_height);                 
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
ImageJpeg($newimage,$thumb1Temp);
chmod("$thumb1Temp",0777);
}

////////////////  End of png thumb nail creation //////////
if($_FILES["file"]["type"][$key]=="image/png"){
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
