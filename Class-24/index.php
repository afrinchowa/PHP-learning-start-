<!-- php not operator -->


<?php
// !true-----------false
// !false-----------true

// $username = "Raj";
$username = "abcd";

if(!($username == "Raj")){
    echo "Hello";
}

?>


<?php 

$username = "raj_123";
$user_length =strlen($username);

if(!($user_length >=3 && $user_length <=5)){

    echo "Invalid User Name";
}else{
    echo "Valid user name";
}
