<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Add task</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <?php 
        if (!isset($_SESSION['username'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="register.php">Register</a>
          </li>
          <?php
        }

        else {
          ?>
          <li class="nav-item">
            <a class="nav-link active" href="#"><?php echo $_SESSION['username']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">Logout</a>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>