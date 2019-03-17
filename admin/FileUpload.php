<?php

	if(isset($_FILES['UploadFileField'])){
		
		
		$UploadName = $_FILES['UploadFileField']['name'];
		$UploadTmp  = $_FILES['UploadFileField']['tmp_name'];
		$UploadType = $_FILES['UploadFileField']['type'];
		
		$UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);
	if(!$UploadTmp){
		
		 die("No file selected, please Upload again");
	}else{
		
		move_uploaded_file($UploadTmp, "Upload/ $UploadName");
		
		}
		
		
		
		}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form action="FileUpload.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">

	<label for="UploadFileField"></label>
    <input type="file" name="UploadFileField" id="UploadFileField" />
    <input type="submit" name="UploadButton" id="UploadButton" value="Upload" />





</form>

</body>
</html>