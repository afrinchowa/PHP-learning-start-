<!-- nested if -->


<?php 


$username = "Raj";
$password = "123";

// if($username == "Raj" && $password =="123"){
//     echo "Hello User";
// }else{
//     echo "Invalid user";
// }

// if($username == "Raj" && $password =="123"){
//     echo "Hello User";
// }else if($password =="123"){
//     echo "Invalid password";
// }
// else if($username == "Raj"){
//     echo "Invalid username";
// }
// else{
//     echo "Invalid user";
// }

if($username == "Raj" && $password =="123"){
    if($password ==1234){
        echo "Hello User";
    }else{
        echo "Invalid Password";
    }
    
}else{
    echo "Invalid username";
}
 ?>