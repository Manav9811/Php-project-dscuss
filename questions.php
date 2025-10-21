 <div class="container">
<div class="row">
 <div class="col-8">
    <H1 class="heading">Questions</H1> 
     <?php
        include("./common/db.php"); 
        if(isset($_GET['c-id'])){
          $cid = $_GET['c-id'];
    $query = "SELECT * FROM questions WHERE category_id = '$cid'";

}  else  if(isset($_GET['u-id'])){
          $cid = $_GET['u-id'];
    $query = "SELECT * FROM questions WHERE user_id = '$uid'";

} else  if(isset($_GET['latest'])){
        //   $cid = $_GET['u-id';
    $query = "SELECT * FROM questions order by id desc";

} else  if(isset($_GET['search'])){
   $query = "SELECT * FROM questions where `title` LIKE '%$search'";
}else{
           $query="SELECT * FROM questions";
        }
        $result= $conn->query($query);

      if ($result && $result->num_rows ) {
          foreach ($result as $row) { 
              $title = htmlspecialchars($row['title']);
              $id = $row['id'];
              echo "<div class='row question-list'> 
                      <h4 class='my-question'><a href='?q-id=$id'>$title</a>";
            echo isset($uid) && $uid?" <a href='./server/requests.php?delete=$id'>Delete</a>":"";
                      echo "</h4></div>"; 
          }
      } 
        ?>
 </div>
 <div class="col-4">
     <?php
     include("categorylist.php")
     ?>

 </div>
 </div> 
 </div> 






























<!-- 

<div class="container">
    <h1 class="heading">Questions</h1>
    <div class="col-8"> -->
        <?php
        // include("./common/db.php");

        // // Fetch all questions
        // $query = "SELECT * FROM questions";
        // $result = $conn->query($query);

        // if ($result) {
        //     foreach ($result as $row) {
        //         $title = htmlspecialchars($row['title']);
        //         $id = intval($row['id']);

        //          "
        //         <div class='row question-list'>
        //             <h4><a href='question.php?qid=$id'>$title</a></h4>
        //         </div>";
        //     }
        // } else {
        //     echo "<p>No questions found.</p>";
        // }
        ?>
    <!-- </div>
</div> -->



















