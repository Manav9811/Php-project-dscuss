<div class="container">
  <h1 class="heading text-center">SignUp</h1>
  <form method="post" action="./server/requests.php">


    <div class="col-6 offset-sm-3">
      <label for="username" class="form-l
      abel">User Name </label>
      <input type="text" class="form-control" id="username" name="username" placeholder="enter user name">
    </div><br> 

    <div class="col-6 offset-sm-3">
      <label for="email" class="form-label">User Email </label>
      <input type="text" class="form-control" id="email" name="email" placeholder="enter user email">
    </div><br>

    <div class="col-6 offset-sm-3">
      <label for="password" class="form-label">User Password </label>
      <input type="text" class="form-control" id="password" name="password" placeholder="enter user password">
    </div><br> 

    <div class="col-6 offset-sm-3">
      <label for="address" class="form-label">User Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="enter user address">
    </div><br>

    <div class="col-6 offset-sm-3">
      <button type="submit" name="signup" class="btn btn-primary">signup</button>
    </div>
  </form>
</div>
 