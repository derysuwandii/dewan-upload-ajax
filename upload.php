<?php
  $temp = "upload/";
  if (!file_exists($temp))
    mkdir($temp);

  $nama_file       = $_POST['nama_file'];
  $fileupload      = $_FILES['fileupload']['tmp_name'];
  $ImageName       = $_FILES['fileupload']['name'];
  $ImageType       = $_FILES['fileupload']['type'];

  if (!empty($fileupload)){
    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt       = str_replace('.','',$ImageExt); // Extension
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName   = str_replace(' ', '', $nama_file.'.'.$ImageExt);

    move_uploaded_file($_FILES["fileupload"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

    echo "Data Berhasil Diupload";
  } else {
    echo "Data Gagal Diupload";
  }
?>
