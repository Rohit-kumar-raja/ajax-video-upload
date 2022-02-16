<?php
echo "working";
// if(isset($_FILES['file']['name'])){

//    /* Getting file name */
//    $filename = $_FILES['file']['name'];

//    /* Location */
//    $location = "upload/".$filename;
//    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
//    $imageFileType = strtolower($imageFileType);

//    /* Valid extensions */
//    $valid_extensions = array("jpg","jpeg","png");

//    $response = 0;
//    /* Check file extension */
//    if(in_array(strtolower($imageFileType), $valid_extensions)) {
//       /* Upload file */
//       if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
//          $response = $location;
//       }
//    }

//    echo $response;
//    exit;
// }

// echo 0;
?>

<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($name)) {

$path= 'upload/';
if (empty($name))
{
echo "Please choose a file";
}
else if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}
?>


