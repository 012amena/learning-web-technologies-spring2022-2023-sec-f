<?php
include 'connect.php';
if (isset($_GET['msg'])) {
  $msg = filter_var($_GET['msg'], FILTER_SANITIZE_STRING);
  echo "<div class='alert alert-success'>$msg</div>";
}
?>
<html lang="en">
<head>
    <title>Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <button><a href="datatable.php">Add product</a></button><br><br>

<table class="table table-striped table-bordered" border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Buying Price</th>
      <th>Buying Price</th>
      <th>Operation</th>
    </tr>
  </thead> 
  <tbody>
    <?php
      
      $sql="select * from `labexam`";
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["buyingprice"] . "</td>";
        echo "<td>" . $row["sellingprice"] . "</td>";
        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
      }
      
    ?>
  </tbody>
</table>
<button><a href="datatable.php">Back</a></button>

</body>
</html>
