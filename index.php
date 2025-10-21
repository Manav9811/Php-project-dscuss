<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dscuss</title>
    <?php include('./client/commonfiles.php'); ?>
</head>
<body>

<?php
session_start();
include('./client/header.php');

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [];
}


if (!isset($_SESSION['user']['username']) || empty($_SESSION['user']['username'])) {

    
    if (isset($_GET['Signup'])) {
        include('./client/signup.php');
    }
    
    else if (isset($_GET['Login'])) {
        include('./client/Login.php');
    }
   
    else {
        ?>
       
    <?php
    }

} else if(isset($_GET['ask'])) {
    include('./client/ask.php');

} else if(isset($_GET['q-id'])) {
    $qid=$_GET['q-id'];
    include('./client/question-details.php');

}else if(isset($_GET['c-id'])){
    echo $cid=$_GET['c-id'];
     include("./client/questions.php");
}
else if(isset($_GET['u-id'])){
    echo $uid=$_GET['u-id'];
     include("./client/questions.php");
}
else if(isset($_GET['latest'])){
    // echo $uid=$_GET['u-id'];
     include("./client/questions.php");
}else if(isset($_GET['search'])){
    $search =$_GET['search'];
     include("./client/questions.php");
}

else{
    include("./client/questions.php");
}

?>

</body>
</html>
























































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dscuss</title>
    <?php 
    // include('./client/commonfiles.php');
     ?>
</head>
<body>

<?php
// session_start();
// include('./client/header.php');

// if (!isset($_SESSION['user'])) {
//     $_SESSION['user'] = [];
// }


// if (!isset($_SESSION['user']['username']) || empty($_SESSION['user']['username'])) {

    
//     if (isset($_GET['Signup'])) {
//         include('./client/signup.php');
//     }
    
// //     elseif (isset($_GET['Login'])) {
//         include('./client/Login.php');
//     }
   
//     else {
        ?>
       
    <?php
    // }

// } else { -->

// }
?>

</body>
</html>
