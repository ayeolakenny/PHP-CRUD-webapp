<?php 

  include('config/db_connect.php');

  // query to get all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

  // make query
  $result = mysqli_query($conn, $sql);

  // fetch resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

  // explode(',', $pizzas[0]['ingredients']);

?>

<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php') ?>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
      <div class="row">

        <?php foreach($pizzas as $pizza): ?>
          
          <div class="col s6 md3">
            <div class="card z-depth-0">
              <img src="img/pizza.svg" alt="pizza" class="pizza">
              <div class="card-content center">
                <h6><?php echo htmlspecialchars($pizza['title']) ?></h6>
                <ul>
                  <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                    <li><?php echo htmlspecialchars($ing) ?></li>
                  <?php endforeach ?>
                </ul>
              </div>
              <div class="card-action right-align">
                <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a>
              </div>
            </div>
          </div>

        <?php endforeach ?>
      
      <?php if(empty($pizza)): ?>
        
        <h5 class="center">There are no recipies right now, try adding one ;)</h5>

      <?php endif ?>
      </div>
    </div>

  <?php include('templates/footer.php') ?>
</html>