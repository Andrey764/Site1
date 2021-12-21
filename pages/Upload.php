<?
include_once("Logical/Function.php");
if (!isset($_COOKIE['Registered_Login'], $_COOKIE['Registered_password']))
    echo ' <script>window.location = "index.php?page=Registration";</script>';
else if (UniqueUser($_COOKIE['Registered_Login'], $_COOKIE['Registered_password']))
    echo ' <script>window.location = "index.php?page=Registration";</script>';
else if (isset($_POST["imageUpload"])) {
    if ($_FILES["UserUploadImage"]["error"] == UPLOAD_ERR_OK) {
        $filename = $_FILES["UserUploadImage"]["name"];
        move_uploaded_file($_FILES["UserUploadImage"]["tmp_name"], "IMAGES/" . $filename);
    }
    echo "<h4>The file is correct and has been uploaded successfully!</h4>";
}

?>

<form action="index.php?page=Upload" method="POST" enctype="multipart/form-data" style="margin: 10px;">
    <input class="btn btn-outline-secondary" type="file" value="Вибрать файл" name="UserUploadImage">
    <input class="btn btn-primary" type="submit" value="Сохранить" name="imageUpload">
</form>