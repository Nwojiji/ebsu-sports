
<?php
if (isset($_POST['submit'])) {
		
	$file = $_FILES['file'];
	
	
	$fileName = $_FILES['file'] ['name'];
	$fileTmpName = $_FILES['file'] ['tmp_name'];
	$fileSize = $_FILES['file'] ['size'];
	$fileError = $_FILES['file'] ['error'];
	$fileType = $_FILES['file'] ['type']; 
	
	
	
	$fileExt  = explode('.', $fileName );
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png' , 'pdf');
	
	
		if(in_array($fileActualExt,$allowed )){
			
					if($fileError ===0){
						
						
							if($fileSize < 1000000){
								$fileNameNew = uniqid('', true). ".".$fileActualExt;
								$fileDestination = 'uploads/'.$fileNameNew;
								move_uploaded_file($fileTmpName, $fileDestination);
								header("location:success.php?uploadsuccess");
								
								}else {
									
									echo "your file is too big!";
									}
							
						
						}else {
							echo "there was an error uploading yourfiles!";
							}
			
			
			
	}else {
		
		echo "you can not upload files of this type!";
		}
	
}


?>

59a698e89f1a54.43442202
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>