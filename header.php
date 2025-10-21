<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="./">
      <img src="./public/logos.png" alt="Logo" height="200" width="300"  >
    </a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php
        
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        
        if (isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/requests.php?logout=true">Logout(<?php  echo ucfirst($_SESSION['user'] ['username']) ?>)</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']?>">My Questions</a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="?Login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?Signup=true">Signup</a>
          </li>
        <?php
        }
        ?>

        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>

      </ul>
      <form class="d-flex" aciton="">
        <input class="form-control me-2" name="search" type="search" placeholder="Search question">
        <button class="btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
