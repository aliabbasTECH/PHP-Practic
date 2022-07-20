
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
<body>
 <?php
 $array =[
    ['name'=>"bolt",'price'=>40],
    ['name'=>"banana",'price'=>50],
    ['name'=>"light",'price'=>60],
    ['name'=>"green",'price'=>30],
    ['name'=>"gold",'price'=>70],
    ['name'=>"coin",'price'=>20],
    ['name'=>"shell",'price'=>10],
    ['name'=>"star",'price'=>80],
    ['name'=>"red shell",'price'=>90],
 ];
 foreach($array as $pro){
  if($pro['price'] < 50 || $pro['price'] == 50){
    echo $pro['name']."<br>";
  }
 }



 ?> 
 
 <ul>
    <?php foreach($array as $val){ ?>
      <?php if($val['price']>50){?>
       <li><?php echo $val['name']; ?></li>
      <?php } ?>
    <?php } ?>
 </ul>

 <a href="shop.php" style="background:red,padding:20px "><button>goback</button></a>
 


</body>
</html>