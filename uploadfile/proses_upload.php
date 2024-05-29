<?php
$dir_upload = "files/";

// Pastikan direktori upload ada
if (!is_dir($dir_upload)) {
    mkdir($dir_upload, 0777, true);
}

$uploadfile = $dir_upload . basename($_FILES['file']['name']);

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        echo "File berhasil diupload ke server pada folder <b>$uploadfile</b>";
    } else {
        echo "File gagal diupload";
    }
} else {
    echo "Error: " . $_FILES['file']['error'];
}
?>
