<!-- && operator

false & true ===false;
true & false ===false;
false & false ===false;
true & true ===true; -->

<?php
$userName = "Chowa";
$userRole = "admin";

if($userName == "Chowa" && $userRole =="admin") {
   echo "Hello" ;
}

?>


<?php
$amount =1200

if(($amount >=1500) && ($amount <=2000)) {

   echo "Amount is between 1500 to 2000" ;
}else if ( ($amount >=2) && ($amount <=1499)){
    echo "Amount is between 1200 to 1499" ;
}else{
    echo "Test";
}

?>