<?php 
require_once 'flowers.php';
$flowers = isset($_SESSION['flowers']) ? $_SESSION['flowers'] : $flowers;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <a href="add.php" class="btn btn-success">Add new flower</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($flowers as $flower):?>
    <tr>
      <td ><?= $flower['name'];  ?> </td>
      <td > <img src="<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>" style="width: 150px; height: auto;"></td>
      <td><?= substr($flower['description'],0,200).'...' ?></td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>