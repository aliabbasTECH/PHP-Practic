<?php
include('config/db_connect.php');
// write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas_ ORDER BY created_at'; //select title,ingredients and id from pizzas_ table and store in php variable date wise ORDER; 

// make query $ get result 
$result= mysqli_query($con, $sql); // create query that from con DB where Ppizzas Table is present;

// fetch the resulting rows as an array 
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mySqli_close($con);

// explode(',',$pizzas[0]['ingredients']);


?>


  <html>

       <?php include("templates/header.php"); ?>
       <h4 class="center grey-text">Pizzas!</h4>
       <div class="container">
        <div class="row">

            <?php foreach($pizzas as $value):?>
          
               <div class="col s6 md3">
                  <div class="card z-depth-0">
                       <div class="card-content center">
                          <h6>
                            <?php echo htmlspecialchars($value['title']); ?>
                          </h6>
                        
                          <ul>
                           <?php foreach(explode(',',$value['ingredients']) as $ing ): ?>
                             <li><?php echo htmlspecialchars($ing);?></li> 
                           <?php endforeach; ?>
                          </ul> 
                        
                        </div>
                        <div class="card-action right-align">
                         <a href="#" class="brand-text">more info</a>
                        </div>
                  </div>
                </div> 
            <?php endforeach; ?>
            <?php  if(count($value) >=4): ?>
              <p>there are 2 or more pizzas</p>
            <?php  else: ?>
                   <p>there are less than 3 pizzas </p>    
            <?php endif; ?>
        </div>
        </div>
        <?php include("templates/footer.php"); ?>
        
  </html>