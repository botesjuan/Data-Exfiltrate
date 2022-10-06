<!DOCTYPE html>
<html lang="en">
<head>
        <title>Upload PHP function</title>
</head>
<body>

<?php
// Display message
echo 'Data Exfiltration!';


	// Destination directory for uploaded files
	$uploaddir = '/tmp/';

	// In PHP, when a file is uploaded, the $_FILES superglobal variable is populated with all the information about the uploaded file. 
	// It’s initialized as an array and contain the following information for successful file upload.
	$uploadfile = $uploaddir . $_FILES['file']['name'];

	// move_uploaded_file function to move the uploaded file to the specific location
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
			
?>

</body>
</html>
