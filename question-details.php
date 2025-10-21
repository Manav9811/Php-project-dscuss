<div class="container"> 
<h1 class="offset-sm-5">Question</h1> 
<br> 
<br>
    <div class="row">
        <div class="col-7">
 <?php 
include("./common/db.php");
    $query="SELECT * FROM questions where  id = $qid";
    $result=$conn->query($query);
    $row=$result->fetch_assoc();
    $cid=$row['category_id'];
    echo "<h4 class='margin-bottom-15 question-title'> Question : ".$row['title']."</h4>
   <p class='margin-bottom-15'>".$row['description']."</p>";
    include("answers.php")
?>

 <form action="./server/requests.php" method="post"> 
    <input type="hidden" name="question_id" value="
    <?php 
    echo $qid  
    ?>">

<textarea name="answer" class="form-control margin-bottom-15"placeholder=" Your answer..." ></textarea>
<br>
<button class="btn btn-primary">Write your answer</button>
</form>
</div> 

<div class="col-5">
<?php

$categoryQuery="SELECT name FROM category where id=$cid";
$categoryResult=$conn->query($categoryQuery);
$categoryRow=$categoryResult->fetch_assoc();
echo "<h1 class='heading' class='offset-sm-4'>". ucfirst($categoryRow['name'])."</h1>";

$query="SELECT * FROM questions where category_id=$cid and  id!=$qid";
$result=$conn->query($query);
foreach($result as $row ){
    $id=$row['id'];
    $title=$row['title'];
    echo "<div class='question-list'> 
    <h4><a href=?q-id=$id>$title</a></h4>
    </div>";
}


?>
</div>
</div>
</div>
 





























































