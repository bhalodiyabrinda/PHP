<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file_demo" method="post" enctype="multipal//form-data">
    <input type="file" name="f[]" id="" multipal>
    <br>
    <input type="submit" value="upload file" name="btn">
    </form>
</body>
</html>

<?php
if (isset($_POST['btn'])){
    $cont =cont($_FILES['f1']['name']);
    for ($i = 0; $i < $cont; $i++) {
        if 
    }
}