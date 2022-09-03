<?php

include "File.php";

$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "jello";
$passwd = "password";

$pdo = new PDO($dsn, $user, $passwd);
$result = File::handleUpload($_FILES['input_file']);

if ($result !== FALSE) {

	// Save the uploaded file to DB. File name as the label
	$fileObj = new File($_POST['complete_name'], $_POST['email'], $password = $_POST['password'], $result['picture_path']);
	$result = $fileObj->save();
	header('Location: index.php?success=1');

} else {

	header('Location: index.php?error=' . $e->getMessage());

}
?>