<?php
// echo "Hello";
$user = "Raj";

$is_admin = ($user =='abcd') ? true : false;
var_dump($is_admin);
?>

<!-- || operator

false & true ===true;
true & false ===true;
false & false ===false;
true & true ===true; -->

<?php
$userName = "Chowa";
$userRole = "Editor";

if($userName == "Chowa" || $userRole =="admin") {
   echo "Hello" ;
}

?>