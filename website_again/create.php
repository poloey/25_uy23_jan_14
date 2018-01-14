<?php 

if (isset($_REQUEST['name']) && isset($_REQUEST['email'])) {
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $con = mysqli_connect('localhost', 'root', '', 'college');
  $con->query("insert into teachers (name, email) values('$name', '$email')");
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>create teachers</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body class="bg-success">
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Add a teacher</h2>
      </div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-danger">Add teacher</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>