<?php

$destination_path = $_SERVER['DOCUMENT_ROOT'] . "/server-html/share-folder/uploaded-files/";
$target_path = $destination_path . basename( $_FILES['uploadedfile']['name']); 

echo "Source=" .      $_FILES['uploadedfile']['name'] . "<br />"; 
echo "Target path=" . $target_path . "<br />"; 
echo "Size=" .        $_FILES['uploadedfile']['size'] . "<br />"; 
echo "Tmp name=" .    $_FILES['uploadedfile']['tmp_name'] . "<br />"; 


if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	echo "The file ".  basename( $_FILES['uploadedfile']['name']) . " has been uploaded";
} else{
	echo "There was an error uploading the file, please try again!";
}
?>