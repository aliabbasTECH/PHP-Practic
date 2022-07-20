
<?php

$title =""; 
$email =""; 
$ingredients ="";

$errors= array('email'=>'','title'=>'','ingredients'=>'');

if(isset($_POST['submit'])){

    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required ';
       }else{
        $email= $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email MUST BE VALID EMAIL ADDRESS';
        }
       }

    if(empty($_POST['title'])){
        $errors['title']= ' A title is required ';
       }else{
        $title= $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title']= 'title must be letters and spaces only';
        }
       }

    if(empty($_POST['ingredients'])){
        $errors['ingredients']= ' A ingredients is required ';
       }else{
        $ingredients= $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients']= 'Ingredieant must be comma separated list ';
        }
       }
    if(array_filter($errors)){     // it will detect that array is empty it runs the condition 
        echo 'errors in the form';
    }else {
        header('Location:index.php');
    }
   }
?>

<!DOCTYPE html>
<html>

<?php include("templates/header.php"); ?>

     <section class="container grey-text">
      <h4 class="center">add a pizza</h4>
      <form action="add.php" class="white" method="POST">
        
        <label>your email:</label>
         <input type="email" name="email" value=<?php echo htmlspecialchars($email);  ?>>
         <div class="red-text"><?php echo $errors['email']  ?></div>
         
        <label>your title:</label>
         <input type="text" name="title"  value=<?php echo htmlspecialchars($title) ; ?>>
         <div class="red-text"><?php echo $errors['title'] ?></div>
        
        <label>ingredients (comma seprated):</label>
         <input type="text" name="ingredients" value=<?php echo htmlspecialchars($ingredients);  ?>>
          <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
      </form>
     </section>
    

<?php include("templates/footer.php"); ?>

</html>
