<?php
$destpath = '../uploads/large/slider'.date(dmY).date(His);
while(list($key,$value) = each($_FILES["file"]["name"]))	{
 if(!empty($value))
{
if (($_FILES["file"]["type"][$key] == "image/gif")
|| ($_FILES["file"]["type"][$key] == "image/jpeg")
|| ($_FILES["file"]["type"][$key] == "image/pjpeg")
|| ($_FILES["file"]["type"][$key] == "image/png")
&& ($_FILES["file"]["size"][$key] < 2000000))
    {
$source = $_FILES["file"]["tmp_name"][$key] ;
$filename = $_FILES["file"]["name"][$key] ;
move_uploaded_file($source, $destpath . $filename);
//thumbnail creation start//
$thumb1Temp='../uploads/thumb/slider'.date(dmY).date(His) .$_FILES["file"]["name"][$key];   // Path where thumb nail image will be stored
$n_width=100;          // Fix the width of the thumb nail images
$n_height=100;         // Fix the height of the thumb nail imaage

/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////
$image1Temp=$destpath . $filename; 
if($_FILES["file"]["type"][$key]=="image/gif"){
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
if($_FILES["file"]["type"][$key]=="image/jpeg"){
    
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
// second Banner
while(list($key,$value) = each($_FILES["file1"]["name"]))
	{

 if(!empty($value))

{

if (($_FILES["file1"]["type"][$key] == "image/gif")

|| ($_FILES["file1"]["type"][$key] == "image/jpeg")

|| ($_FILES["file1"]["type"][$key] == "image/pjpeg")

|| ($_FILES["file1"]["type"][$key] == "image/png")

&& ($_FILES["file1"]["size"][$key] < 2000000))

    {

$source = $_FILES["file1"]["tmp_name"][$key] ;

$filename = $_FILES["file1"]["name"][$key] ;

move_uploaded_file($source, $destpath . $filename);

//thumbnail creation start//

$thumb2Temp='../uploads/thumb/banner'.date(dmY).date(His) .$_FILES["file1"]["name"][$key];   // Path where thumb nail image will be stored

$n_width=100;          // Fix the width of the thumb nail images

$n_height=100;         // Fix the height of the thumb nail imaage


/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////

$image2Temp=$destpath . $filename; 

if($_FILES["file1"]["type"][$key]=="image/gif"){

//echo "hello";

$im=ImageCreateFromGIF($image1Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);            // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

if (function_exists("imagegif")) {

Header("Content-type: image/gif");

ImageGIF($newimage,$thumb2Temp);

}

if (function_exists("imagejpeg")) {

Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb2Temp);

}

    }

//chmod("$tsrc",0777);

////////// end of gif file thumb nail creation//////////

$n_width=115;          // Fix the width of the thumb nail images

$n_height=115;         // Fix the height of the thumb nail imaage



////////////// starting of JPG thumb nail creation//////////

if($_FILES["file1"]["type"][$key]=="image/jpeg"){

    

$im=ImageCreateFromJPEG($image2Temp); 

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);             // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);                 

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

ImageJpeg($newimage,$thumb2Temp);

chmod("$thumb2Temp",0777);

}



////////////////  End of png thumb nail creation //////////

if($_FILES["file1"]["type"][$key]=="image/png"){

//echo "hello";

$im=ImageCreateFromPNG($image2Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);                  // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);



if (function_exists("imagepng")) {

//Header("Content-type: image/png");

ImagePNG($newimage,$thumb2Temp);

}



if (function_exists("imagejpeg")) {

//Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb2Temp);

}	

    }
    }
}

}
// Thnird Banner
while(list($key,$value) = each($_FILES["file2"]["name"]))
	{

 if(!empty($value))

{

if (($_FILES["file2"]["type"][$key] == "image/gif")

|| ($_FILES["file2"]["type"][$key] == "image/jpeg")

|| ($_FILES["file2"]["type"][$key] == "image/pjpeg")

|| ($_FILES["file2"]["type"][$key] == "image/png")

&& ($_FILES["file2"]["size"][$key] < 2000000))

    {

$source = $_FILES["file2"]["tmp_name"][$key] ;

$filename = $_FILES["file2"]["name"][$key] ;

move_uploaded_file($source, $destpath . $filename);

//thumbnail creation start//

$thumb3Temp='../uploads/thumb/banner'.date(dmY).date(His) .$_FILES["file2"]["name"][$key];   // Path where thumb nail image will be stored

$n_width=100;          // Fix the width of the thumb nail images

$n_height=100;         // Fix the height of the thumb nail imaage


/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////

$image3Temp=$destpath . $filename; 

if($_FILES["file2"]["type"][$key]=="image/gif"){

//echo "hello";

$im=ImageCreateFromGIF($image3Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);            // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

if (function_exists("imagegif")) {

Header("Content-type: image/gif");

ImageGIF($newimage,$thumb3Temp);

}

if (function_exists("imagejpeg")) {

Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb3Temp);

}

    }

//chmod("$tsrc",0777);

////////// end of gif file thumb nail creation//////////

$n_width=115;          // Fix the width of the thumb nail images

$n_height=115;         // Fix the height of the thumb nail imaage



////////////// starting of JPG thumb nail creation//////////

if($_FILES["file2"]["type"][$key]=="image/jpeg"){

    

$im=ImageCreateFromJPEG($image3Temp); 

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);             // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);                 

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

ImageJpeg($newimage,$thumb3Temp);

chmod("$thumb3Temp",0777);

}



////////////////  End of png thumb nail creation //////////

if($_FILES["file2"]["type"][$key]=="image/png"){

//echo "hello";

$im=ImageCreateFromPNG($image3Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);                  // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);



if (function_exists("imagepng")) {

//Header("Content-type: image/png");

ImagePNG($newimage,$thumb3Temp);

}



if (function_exists("imagejpeg")) {

//Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb3Temp);

}	

    }
    }
}

}

// Fourth Banner

while(list($key,$value) = each($_FILES["file3"]["name"]))
	{

 if(!empty($value))

{

if (($_FILES["file3"]["type"][$key] == "image/gif")

|| ($_FILES["file3"]["type"][$key] == "image/jpeg")

|| ($_FILES["file3"]["type"][$key] == "image/pjpeg")

|| ($_FILES["file3"]["type"][$key] == "image/png")

&& ($_FILES["file3"]["size"][$key] < 2000000))

    {

$source = $_FILES["file3"]["tmp_name"][$key] ;

$filename = $_FILES["file3"]["name"][$key] ;

move_uploaded_file($source, $destpath . $filename);

//thumbnail creation start//

$thumb4Temp='../uploads/thumb/banner'.date(dmY).date(His) .$_FILES["file3"]["name"][$key];   // Path where thumb nail image will be stored

$n_width=100;          // Fix the width of the thumb nail images

$n_height=100;         // Fix the height of the thumb nail imaage


/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////

$image4Temp=$destpath . $filename; 

if($_FILES["file3"]["type"][$key]=="image/gif"){

//echo "hello";

$im=ImageCreateFromGIF($image4Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);            // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

if (function_exists("imagegif")) {

Header("Content-type: image/gif");

ImageGIF($newimage,$thumb4Temp);

}

if (function_exists("imagejpeg")) {

Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb4Temp);

}

    }

//chmod("$tsrc",0777);

////////// end of gif file thumb nail creation//////////

$n_width=115;          // Fix the width of the thumb nail images

$n_height=115;         // Fix the height of the thumb nail imaage



////////////// starting of JPG thumb nail creation//////////

if($_FILES["file3"]["type"][$key]=="image/jpeg"){

    

$im=ImageCreateFromJPEG($image4Temp); 

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);             // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);                 

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

ImageJpeg($newimage,$thumb4Temp);

chmod("$thumb4Temp",0777);

}



////////////////  End of png thumb nail creation //////////

if($_FILES["file3"]["type"][$key]=="image/png"){

//echo "hello";

$im=ImageCreateFromPNG($image4Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);                  // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);



if (function_exists("imagepng")) {

//Header("Content-type: image/png");

ImagePNG($newimage,$thumb4Temp);

}



if (function_exists("imagejpeg")) {

//Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb4Temp);

}	

    }
    }
}

}

//fifth Banner

while(list($key,$value) = each($_FILES["file4"]["name"]))
	{

 if(!empty($value))

{

if (($_FILES["file4"]["type"][$key] == "image/gif")

|| ($_FILES["file4"]["type"][$key] == "image/jpeg")

|| ($_FILES["file4"]["type"][$key] == "image/pjpeg")

|| ($_FILES["file4"]["type"][$key] == "image/png")

&& ($_FILES["file"]["size"][$key] < 2000000))

    {

$source = $_FILES["file4"]["tmp_name"][$key] ;

$filename = $_FILES["file4"]["name"][$key] ;

move_uploaded_file($source, $destpath . $filename);

//thumbnail creation start//

$thumb5Temp='../uploads/thumb/banner'.date(dmY).date(His) .$_FILES["file4"]["name"][$key];   // Path where thumb nail image will be stored

$n_width=100;          // Fix the width of the thumb nail images

$n_height=100;         // Fix the height of the thumb nail imaage


/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////

$image5Temp=$destpath . $filename; 

if($_FILES["file4"]["type"][$key]=="image/gif"){

//echo "hello";

$im=ImageCreateFromGIF($image5Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);            // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

if (function_exists("imagegif")) {

Header("Content-type: image/gif");

ImageGIF($newimage,$thumb5Temp);

}

if (function_exists("imagejpeg")) {

Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb5Temp);

}

    }

//chmod("$tsrc",0777);

////////// end of gif file thumb nail creation//////////

$n_width=115;          // Fix the width of the thumb nail images

$n_height=115;         // Fix the height of the thumb nail imaage



////////////// starting of JPG thumb nail creation//////////

if($_FILES["file4"]["type"][$key]=="image/jpeg"){

    

$im=ImageCreateFromJPEG($image5Temp); 

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);             // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);                 

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

ImageJpeg($newimage,$thumb5Temp);

chmod("$thumb5Temp",0777);

}



////////////////  End of png thumb nail creation //////////

if($_FILES["file4"]["type"][$key]=="image/png"){

//echo "hello";

$im=ImageCreateFromPNG($image5Temp);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);                  // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);



if (function_exists("imagepng")) {

//Header("Content-type: image/png");

ImagePNG($newimage,$thumb5Temp);

}



if (function_exists("imagejpeg")) {

//Header("Content-type: image/jpeg");

ImageJPEG($newimage,$thumb5Temp);

}	

    }
    }
}

}
?>