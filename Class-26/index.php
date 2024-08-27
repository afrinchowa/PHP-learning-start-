<!-- <?php 
// loop
// whhile do-while

// while (condition /loop  ta kotobar cholbe){
//     loop body / loop ta protibar ki kaj korbe
// }

// $count =1;

// while ($count <= 5){
//     echo "Chowa<br>";
//     $count++;
// }
// while ($count <= 5){
//     echo "Hello $count <br>";
//     $count+=2;
// }


// echo " Raj"; 
// echo " <br>"; 
// echo " RajDip"; 
// ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
year
<select >
<?php
$year=2000;
while($year <=2050){
    ?>
     <option value="<?php echo $year;?>"> <?php echo $year;?></option>
   <?php
   $year++;
}
   ?>

</select>

    </form>
</body>
</html>