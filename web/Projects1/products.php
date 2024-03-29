<?php
require "database.php";
$db = get_db();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guitar-Sales</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: #e5e5e5">
    <?php require_once('navbar.php'); ?>
    <section class="pricing py-5">
      <div class="container">
        <div class="row">
          <?php
            foreach ($db->query('SELECT *
                                FROM GUITAR_BODY
                                JOIN GUITAR ON GUITAR_BODY.guitar_id = GUITAR.id
                                JOIN BODY   ON GUITAR_BODY.color_id  = BODY.id') as $row) 
            {
              $model = ucfirst($row['name']);
              $color = ucfirst($row['color']);
              echo '<div class="col-lg-4">
                      <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                          <img src="img/' . ucfirst($row['img']) . '" class="card-img-top" alt="...">
                          <h6 class="card-price text-center">$' . ($row['price']) . '</h6>
                          <hr>
                          <ul class="fa-ul" style="list-style-type:none">
                            <form method="POST" action="checkout.php">
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Guitar Model: <strong>' . ucfirst($row['name']) . '</strong></li>
                            <input class="fa-li" type="hidden" id="txtModel" name="txtModel" value="'. ucfirst($row['name']) . '"/>
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Body Color: <strong>' . ucfirst($row['color']) . '</strong></li>
                            <input class="fa-li" type="hidden" id="txtColor" name="txtColor" value="' . ucfirst($row['color']) . '"/>
                          </ul>
                          <button onclick="orderForm()" type="submit" class="btn btn-block btn-primary btn-lg">Order This Guitar!</button>
                          </form>  
                        </div>
                      </div>
                    </div>';         
            }?>
        </div>
      </div>
    </section>
    <?php require_once('footer.php'); ?>
</body>
</html>

