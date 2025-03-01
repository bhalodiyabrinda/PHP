<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PDF File Uploader</title>
</head>
<body>
    <h1>PDF File Uploader</h1>

    <form action="T3(2).PHP" method="post" enctype="multipart/form-data">
        <label for="pdf_file">Select a PDF file (Max 5MB):</label>
        <input type="file" id="pdf_file" name="pdf_file" accept=".pdf" required>
        <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['pdf_file'])) {
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($_FILES['pdf_file']['name']);
        $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        $maxFileSize = 5 * 1024 * 1024; // 5MB

        if ($fileType != 'pdf') {
            echo "<p>Error: Only PDF files are allowed.</p>";
        } elseif ($_FILES['pdf_file']['size'] > $maxFileSize) {
            echo "<p>Error: File size exceeds the limit of 5MB.</p>";
        } else {
            if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $uploadFile)) {
                echo "<p>File uploaded successfully.</p>";
            } else {
                echo "<p>Error uploading file.</p>";
            }
        }
    }
?>
