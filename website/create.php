<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>add teacher</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body class="bg-info">
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Add a teacher</h2>
      </div>
      <div class="card-body"> 
        <form action="create_controller.php" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Add a teacher</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  
</body>
</html>