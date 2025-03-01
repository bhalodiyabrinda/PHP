<!-- 1. create a file management system using PHP. Implement the following functionalities
Display a list of files in a dirctory.
Provide options to upload new files.
allow users to download files.
implement a delect filess. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="T4.PHP" method="post" enctype="multipart/form-data">
        Select a file to upload: 
        <input type="file" name="f1" id="">
        <br>
        <input type="submit" value="Upload" name="btn">
    </form>
</body>
</html>

<?php
$dir = "upload_B";
if(isset($_POST['btn'])){
    if($_FILES['f1']['name']==""){ ?>
        <span style="color:red">please select a file to upload</span>
        <?php
    }else{
        if (!is_dir($dir)){
            mkdir($dir);
        }
        if (move_uploaded_file($_FILES['f1']['tmp_name'],$dir . "/" . $_FILES['f1']['name'])){
        ?>
            <span style="color: green">File upload Successfully </span>
        <?php
        } else {
        ?>
            <span style="color: red"> Error in moving the file</span>
        <?php
        }
    }
}
if(!is_dir($dir)){
    ?>
    <span style="color:red">Your uploads folder is empty. please upload files to view the contents of folder</span>
<?php
}else{
    $ptr = opendir($dir);
    $files = scandir($dir);
?>
    <table border="1" style="border-collapse: collapse" ;>
        <tr>
            <th>$r.NO</th>
            <th>Filename</th>
            <th>Download</th>
            <th>Delete</th>
        </tr>
        <?php
        $i=1;
        foreach ($files as $f2){
            if ($f2 != "." && $f2 != ".."){
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $f2; ?></td>
                <td>
                    <a href="<?php echo $dir . "/" .$f2; ?>" download> 
                        <input type="button" value="Download">
                    </a>
                </td>
                <td>
                    <a href="delete.php?f_name=<?php echo $f2;?>">
                        <input type="button" value="Delete">
                    </a>
                </td>
            </tr>
    <?php
            $i++;
            }
        }
    }
    ?>
    </table>
