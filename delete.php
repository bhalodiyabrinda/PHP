<?php
$dir = "upload_B"
$fname = $_REQUEST['f_name'];
//echo $fname;
unlink($dir . "/" . $fname);
?>
<script>
    window.location.herf="T4.php";
</script>