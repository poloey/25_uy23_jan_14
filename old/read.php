<?php 

$con = mysqli_connect('localhost', 'root', '', 'college');
$teachers = $con->query("select * from teachers");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All teachers</title>
  <style>
    table, th, td {
      border: 1px solid #eee;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
    }
    tr:nth-child(even) {
      background: teal;
      color: white;
    }
    tr:nth-child(odd) {
      background: salmon;
      color: white;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
    <?php while($teacher = $teachers->fetch_object()): ?>
      <tr>
        <td><?php echo $teacher->id; ?></td>
        <td><?php echo $teacher->name; ?></td>
        <td><?php echo $teacher->email; ?></td>
      </tr>
    <?php endwhile; ?>

  </table>
  
</body>
</html>