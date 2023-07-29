<?php 

if (isset($_POST['submit']) && isset($_FILES['file'])) {
	include "db_conn.php";

	echo "<pre>";
	print_r($_FILES['file']);
	echo "</pre>";
	$file = $_FILES['file'];
	$file_count = count($file['name']);

	if($file_count<=2){
	for ($i = 0; $i < $file_count; $i++){

	$file_name = $file['name'][$i];
	$file_size =$file['size'][$i];
	$tmp_name = $file['tmp_name'][$i];
	$error = $file['error'][$i];

	if ($error === 0) {
		if ($file_size > 95055000) {
			$em = "Failo dydis per didelis.";
		    header("Location: index.php?error=$em");
		}else {
			$file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
			$file_ex_lc = strtolower($file_ex);

			$allowed_exs_img = array("jpg", "jpeg", "png"); 
			$allowed_exs_doc = array("doc", "docx"); 

			if (in_array($file_ex_lc, $allowed_exs_img)) {
				$new_file_name = uniqid("IMG-", true).'.'.$file_ex_lc;
				$file_upload_path = 'uploads/img/'.$new_file_name;
				move_uploaded_file($tmp_name, $file_upload_path);

				
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_file_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
			}
			elseif (in_array($file_ex_lc, $allowed_exs_doc)) {
				$new_file_name = uniqid("DOC-", true).'.'.$file_ex_lc;
				$file_upload_path = 'uploads/doc/'.$new_file_name;
				move_uploaded_file($tmp_name, $file_upload_path);

				
				$sql = "INSERT INTO documents(document_url) 
				        VALUES('$new_file_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
			}
			
			else {
				$em = "Sito failo tipo ikelti negalima.";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}
	}
	}else {
		$em = "Vienu metu galima ikelti tik 2 failus!";
		header("Location: index.php?error=$em");}
}else {
	header("Location: index.php");
}