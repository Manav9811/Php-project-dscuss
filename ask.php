 <div class="container">
   <h1 class="heading text-center">Ask Question</h1>

  <form action="./server/requests.php" method="post">
   
  <div class="col-6 offset-sm-3">
    <label for="title" class="form-label">Title </label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question">
  </div>

<br>

<div class="col-6 offset-sm-3">  
    <label for="title" class="form-label">Description </label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
  </div>
<br>
   <div class="col-6 offset-sm-3">
   <label for="title" class="form-label">Category </label>
    <?php
    include("category.php");
    ?>
  </div>
 <br>
<div class="col-6 offset-sm-3">
<button type="submit" name="ask" class="btn btn-primary">Ask Question</button> 


  
</div>
  
 </form> 
 </div>  













