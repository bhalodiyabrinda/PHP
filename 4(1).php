<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4(1).php" method="POST">
        Enter Number:
        <input type="number" name="n" id="">
        <br>
        <button type="submit" value="Genret texboxes" name="btn">Genret texboxes</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST['btn'])){
        $n =$_POST['n'];
    ?>
        <form action="4(1).php" method="POST"
        <?php
        for ($i=1; $i<=$n; $i++){
        ?>
            Enter number <?php echo $i; ?>:: <input type="text" name="n1[]">
        <?php
        }
        ?>
        <input type="submit" value="sort data" name="sort_btn">
    </form>
    <?php
    }

    if (isset($_POST['sort_btn'])){
        $a = $_POST['n1'];

        $count = count($a);
        for ($i = 0; $i < $count; $i++){
            for ($j=$i+1; $j<$count; $j++){
                if($a[$i]> $a[$j]){
                    $temp=$a[$i];
                    $a[$i]=$a[$j];
                    $a[$j]=$temp;
                }
            }
        }
        foreach ($a as $k){
            echo $k."<br>";
        }
    }