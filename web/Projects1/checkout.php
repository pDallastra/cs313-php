<?php
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $model = $_POST['txtModel'];
    $color = $_POST['txtColor'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php require_once('navbar.php') ?>
    <br>
    <div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Guitar Model</th>
      <th scope="col">Body Color</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><?php echo $name ?></th>
      <td><?php echo $email ?></td>
      <td><?php echo $model ?></td>
      <td><?php echo $color ?></td>
    </tr>
  </tbody>
</table>
</div>
<br>
<button type="submit" class="btn btn-danger btn-lg" style="width: 10rem;height: 4rem;border-radius: 5rem;">Cancel</button>
<button type="submit" class="btn btn-success btn-lg" style="width: 10rem;height: 4rem;border-radius: 5rem;">Confirm</button>

<?php require_once('footer.php') ?>
</body>
</html>