<?php
session_start();
include("../common/db.php");
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $address  = $_POST['address'];

    $user = $conn->prepare("INSERT INTO `users`
        (`id`, `username`, `email`, `password`, `address`)
        VALUES (NULL, ?, ?, ?, ?)");
    $user->bind_param("ssss", $username, $email, $password, $address);

    $result = $user->execute();

$user->insert_id;

if ($result) {
    

    $_SESSION['user'] = ['username' => $username,'email' => $email,"user_id"=>$user_id];
    header("Location: /dscuss");
    exit;

} else {
    echo "New user not registered: " . $conn->error;
}


    
    $user->close();
}


else if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username="";
    $user_id=0;

        $query="SELECT * FROM `users` WHERE email = '$email' && password = '$password' ";

          $result= mysqli_query($conn,$query);

   if ($result->num_rows==1) {

    foreach($result as $row){
           
            $username=$row['username'];
            $user_id=$row['id'];
        }

        $_SESSION['user'] = ['username' => $username,'email' => $email,"user_id"=>$user_id];
        header("Location: /dscuss");
        exit;
    } else {
        echo "New user not registered ";
    }

    echo $result->num_rows;

}
else if (isset($_GET['logout'])){
    session_unset();         
    session_destroy();

    header("Location:/dscuss");             

}else if(isset($_POST['ask'])){
     $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    $question = $conn->prepare("INSERT INTO `questions`
        (`id`, `title`, `description`, `category_id`, `user_id`)
        VALUES (NULL, ?, ?, ?, ?)");
    $question->bind_param("ssss", $title, $description, $category_id, $user_id);

    $result = $question->execute();

$question->insert_id;

if ($result) {
    

    header("Location: /dscuss");
    exit;

} else {
    echo "Questions is added to website: " . $conn->error;
}
    
}else if (isset($_POST["answer"])) {
    $answer      = ($_POST['answer']);
    $question_id = $_POST['question_id'];
    $user_id     = $_SESSION['user']['user_id'];

    $stmt = $conn->prepare("INSERT INTO `answers` (`answer`, `question_id`, `user_id`)
     VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $answer, $question_id, $user_id);

    if ($stmt->execute()) {

        header("Location: /dscuss?q-id=$question_id");
        exit;
    } else {
        echo " Answer not submitted: " . $stmt->error;
    }

    $stmt->close();
}else if (isset($_GET["delete"])) {
    $qid = $_GET["delete"]; // get the id from URL safely

    // Use a parameterized query to prevent SQL injection
    $query = $conn->prepare("DELETE FROM questions WHERE id = ?");
    $query->bind_param("i", $qid); // bind the id as integer

    $result = $query->execute();

    if ($result) {
        header("Location: /dscuss");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// else if(isset($_GET["delete"])){
//    echo $qid= $_GET["delete"];
//    $query= $conn->prepare("delete from questions where id=$id");
//  $result= $query->execute();
//  if($result){
//  header("Location: /dscuss");
//  }else{
//     echo "Question not delete";
//  }
// }

// $conn->close();

?>



 






































































<?php
// session_start();
// include("../common/db.php");

// if (isset($_POST['signup'])) {
//     $username = $_POST['username'];
//     $email    = $_POST['email'];
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure hashing
//     $address  = $_POST['address'];

//     $stmt = $conn->prepare("INSERT INTO `users`
//         (`id`, `username`, `email`, `password`, `address`)
//         VALUES (NULL, ?, ?, ?, ?)");
//     $stmt->bind_param("ssss", $username, $email, $password, $address);

//     $result = $stmt->execute();

//     if ($result) { // ✅ removed semicolon
//         echo "New user registered!";
//         $_SESSION["user"] = [
//             "username" => $username,
//             "email" => $email
//         ];
//     } else {
//         echo "New user not registered: ";
//     }


// }else if (isset($_POST['login'])) {
//         $email = $_POST['email'];
//         $password =$_POST['password'];
//         $query="SELECT * FROM `users` WHERE email = '$email' && password = '$password' ";
//         $data= mysqli_query($conn,$query);

//        $total = mysqli_num_rows($data);

    // echo $total;

//     if($total ==1)
//     {

//     // echo "login success";
//     header("location:dscuss");

//     }else{

//     echo "login failed";

//     }
// }

?>




 -->
