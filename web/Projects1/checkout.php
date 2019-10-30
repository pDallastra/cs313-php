<?php

    $model = $_POST['txtModel'];
    $color = $_POST['txtColor'];

    if($model == 'Stratocaster')
    {
        $price = 399;
    }
    else if($model == 'Telecaster')
    {
        $price = 349;
    }
    else if($model == 'Jaguar')
    {
        $price = 299;
    }

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
      <th scope="col">Guitar Model</th>
      <th scope="col">Body Color</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $model ?></td>
      <td><?php echo $color ?></td>
      <td><?php echo '$' . $price ?></td>
    </tr>
  </tbody>
</table>
                <input type="hidden" id="txtModel" name="txtModel" value="<?php echo $model ?>"/>
                <input type="hidden" id="txtColor" name="txtColor" value="<?php echo $color ?>"/>
<button type="submit" class="btn btn-danger btn-lg" style="width: 10rem;height: 4rem;border-radius: 5rem;"><a href="products.php" style="color: white;">Cancel</a></button>
<form  method="POST" action="insert.php">
<section id="displayForm" class="container">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Full Name</label>
                      <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6" style="">
                      <label for="inputPassword4">Email</label>
                      <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                    </div>
                  </div>
                  <br><br>
                </section>
<input type="hidden" id="txtColor" name="txtModel" value="<?php echo $model ?>"/>
<input type="hidden" id="txtColor" name="txtColor" value="<?php echo $color ?>"/>
<input type="hidden" id="txtColor" name="txtPrice" value="<?php echo $price ?>"/>
<button type="submit" class="btn btn-success btn-lg" style="width: 10rem;height: 4rem;border-radius: 5rem;">Confirm</button></p>
</form>
</div>

<?php require_once('footer.php') ?>
</body>
</html>