
<html>
<head>
  <title>ali.php</title>
</head>
<body>

<form name="f1" action="alihtml.php" method="POST"    >
Name:<input type="text" name="txtname">
AGE:<input type="number" name="txtage">
<input type="submit" value="send" name="submit">

</form>


</body>

</html>

<?php
if(isset($_REQUEST['submit'])){
  $nam=$_REQUEST['txtname'];
  $age=$_REQUEST['txtage'];
  echo "Name is = $nam <br> Age is = $age";
}
else{
   echo "empty";
}
?>
