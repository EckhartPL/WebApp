<?php
include 'navbar.php';
include 'news.php';
include 'db_config.php';
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Dodaj okładkę:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>

<?php
$statusMsg = '';

$targetDir = "obrazy/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insert = $db->query("INSERT into obrazy (nazwa, data_dodania) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "Obraz ".$fileName. " został zaimportowany.";
            }else{
                $statusMsg = "Dodawanie grafiki nie powiodło się, spróbuj ponownie.";
            } 
        }else{
            $statusMsg = "Wystąpił błąd w trakcie dodawania grafiki.";
        }
    }else{
        $statusMsg = 'Obsługiwane są następujące formaty: PNG, JPG, JPEG, GIF oraz pliki PDF.';
    }
}else{
    $statusMsg = 'Wybierz plik do zaimportowania.';
}

echo $statusMsg;

?>