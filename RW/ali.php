<?php
// echo "welcom to php"; // is used to print or show the values what we want to show 
// echo "hello "; 
// echo "world";
// $name=10; //valid
// $name="ali";//valid
// $x=10;// php variable automaticaly identify the type of data that is provided  
// // $x= "ten";// 
// $y=++$x;
// echo $y;
// ________________________________ else if condition 
// $marks=50;
// if ($marks>=90){
//     echo "A+";
// }
// else if($marks>=80 ){
//     echo "A";
// }
// else if($marks>=70 ){
//     echo "B+";
// }
// else if($marks>=60 ){
//     echo "B";
// }
// else if($marks>=50){
//     echo "c";
// }
// else
// {
//   echo "fail";
// }
// ________________________________ switch 
// $order=1;

// switch($order){

//     case 1:
//         echo 'order tea';
//         break;
//     case 2:
//         echo "order coffe";
//         break;
//     case 3:
//         echo "order lunch";
//         break;
//     default:
//        echo "wrong order";
//        break;


// }

// ________________________________ loop__________________________________________________________
// echo "<br>__________for ______________<br><br>";
// $num=2;
// for ($a=1; $a<=10; $a++){
//      $b=$num*$a;
//     echo " $num x $a = $b <br> ";  
// }
//  echo "<br>__________While______________<br><br>";
// // top testing loop 
// $a=1;
// while($a<=10){
//     $b=$num*$a;
//    echo $num."x".$a."=".$b."<br>";
//    $a++;
// }

// echo "<br>__________do While______________<br><br>";
// // bottom testing loop ;
// $a=1;
// do{
//     $b=$num*$a;
//     echo  " $num x $a = $b <br> ";
//     $a++;
// }
// while($a<=10);



// __________________________________________________________Array___________________________
// echo "______indexed Array ______ <br>";
// $books = array("python","java","c++","js");
// echo $books[0]; // the indexed typed of array
// //  ____iterate through for loop__
// echo "<br>______forloop___<br>";
// for($i=0 ;$i<count($books); $i++  ){

//     echo "$books[$i] <br>";
// }
// //  ___ iterate throught foreach method ______
// echo "______foreach method ___<br>";
// foreach($books as $val){
//     echo "$val  <br>";
// }
// echo "______Associative Array ______ <br>";
// // Associative Array ____________
// $price=array("php"=>"450", "java"=>"550" ,"c++"=>"650");
// // "php" is a key and "450" is value of php means the value of 450 is associatied with php   
// echo $price['php']; // we call the key so it will show the value tha is accociative with that key   
// echo "<br>______associative array itration using forloop___<br>";
// for($i=0 ;$i<count($price); $i++ ){
//     $key = array_keys($price);
//     echo  $key[$i]  ." price is ".$price[$key[$i]]."<br>" ;
// }
// echo "<br>______associative array itration using foreach method ___<br>";
// foreach($price as $key=>$val){
//     echo "$key price is = $val <br>";
// }

// //  multidimensional Array ____________
// //  array in array 
// echo "<br> __________multidimensional array itration using foreach method ___<br>";
// $shop = array(
//     "laptop"=> array("compaq","dell","hp"),
//     "shose"=> array('addi',"puma","guci"),
//     "mobile"=> array("samsung","huawi","realme")
//     ) ;

// foreach($shop as $key=>$val){
//     foreach($val as $value)
//         echo "$key is = $value <br>";
//     }
// __________________________________________________________Functons___________________________

// function test(){
//     echo "this is test funtion <br>";
// };
// test();
// function show(){
    
// }

// function permfunction($arg1,$arg2){
//        echo "value is of arg1 $arg1 <br>";
//        echo "value is of arg2 $arg2 <br>";
// }
// permfunction(20,30);

// function sum($num1,$num2){
//     $add = $num1 + $num2;
//     echo "$num1 + $num2 = $add  <br>";
   
// }
// sum(20,30);
// sum(2,3);





// ________________________ sorting array _____________ 
//sort() = sort arrays in ascending order    
// rsort()-sort arrays in descending order reverce sort
// asort()-sort associative arrays in ascending order,according to the value  
// ksort()-sort associative arrays in ascending order,according to the keys   
// arsort()-sort associative arrays in descending order reverce ,according to the value  
// krsort()-sort associative arrays in descending order reverce ,according to the keys  
// echo "<br> +++++++ sort&rsort ++++++++++ <br>  ";

// $books = array(1,2,3,4,5,10,7,6,8,9);
//  echo "<br> ___sort in ascending order____ <br>"; 
//  sort($books);
// foreach($books as $val){
//     echo "$val<br>";
// }
//   echo "<br> ___sort in descending order____ <br>";
//   rsort($books);    
// foreach($books as $val){
//     echo "$val<br>";
// }
// echo "<br> ++++++++  asort&ksort  ++++++++<br>  ";
// echo "<br> _asort_ <br>  ";
// $price= array("php"=>450,"java"=>560,"asp"=>250);
// asort($price);
// foreach($price as $key =>$val ){
//     echo "$key price is =$val <br>";
// }
// echo "<br> _ksort_ <br>  ";
// $price= array("aphp"=>450,"java"=>560,"asp"=>250);
// ksort($price);
// foreach($price as $key =>$val ){
//     echo "$key price is =$val <br>";
// }

// echo "<br> ++++++++  arsort&krsort  ++++++++<br>  ";
// echo "<br> _asort_ <br>  ";
// $price= array("php"=>450,"java"=>560,"asp"=>250);
// arsort($price);
// foreach($price as $key =>$val ){
//     echo "$key price is =$val <br>";
// }
// echo "<br> _ksort_ <br>  ";
// $price= array("aphp"=>450,"java"=>560,"asp"=>250);
// krsort($price);
// foreach($price as $key =>$val ){
//     echo "$key price is =$val <br>";
// }


//  ____________________________________________________include function

// include("ali2.php");
// // require("ali2.php");
// // require("aali2.php"); //if file dose not exist code is not run undile file is correct show error but not run blow code it stops the code exicution 
// echo "helloworld";
// $date = date("d/m/y");
// echo $date."<br>";
// $date2 = date("D/M/Y");
// echo $date2;

// $date = mktime(0,0,0,date("m"),date("d"),date("y"));
// echo $date."<br>";
// $date2 = date("D/M/Y",$date);
// echo $date2

// $name=$_POST["txtn"];
// $pass=$_POST["txtp"];

// echo "your name is $name ";

// echo  $_SERVER['PHP_SELF'] ." = Returns the filename of the currently executing script";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['GATEWAY_INTERFACE']." = Returns the version of the Common Gateway Interface (CGI) the server is using";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SERVER_ADDR']." = Returns the IP address of the host server" ;
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SERVER_NAME']." = Returns the name of the host server (such as www.w3schools.com)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SERVER_SOFTWARE'] ." = Returns the server identification string (such as Apache/2.2.24)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER["SERVER_PROTOCOL"]." = Returns the name and revision of the information protocol (such as HTTP/1.1)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER["REQUEST_METHOD"]." = Returns the request method used to access the page (such as POST)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER["REQUEST_TIME"]." = Returns the timestamp of the start of the request (such as 1377687496)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['QUERY_STRING']." = Returns the query string if the page is accessed via a query string";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['HTTP_ACCEPT']."	Returns the Accept header from the current request";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['HTTP_ACCEPT_CHARSET']." = Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['HTTP_HOST']. " = Returns the Host header from the current request";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['HTTP_REFERER'].' = Returns the complete URL of the current page (not reliable because not all user-agents support it)';
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['HTTPS'].' = Is the script queried through a secure HTTP protocol';
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['REMOTE_ADDR'];
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['REMOTE_HOST'];
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['REMOTE_PORT'];
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SCRIPT_FILENAME']." = Returns the absolute pathname of the currently executing script";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SERVER_ADMIN']." = Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SERVER_PORT']." = Returns the port on the server machine being used by the web server for communication (such as 80)";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SERVER_SIGNATURE']. " = Returns the server version and virtual host name which are added to server-generated pages";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['PATH_TRANSLATED']." = Returns the file system based path to the current script ";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SCRIPT_NAME']." = Returns the path of the current script ";
// echo "<br>__________________________________________________________________________________________________________________________________<br>";
// echo $_SERVER['SCRIPT_URI']." =  Returns the URI of the current page";

// echo "<br>__________________________________________________________________________________________________________________________________<br>";


$nam=$_REQUEST["txtname"];
$age=$_REQUEST["txtage"];

echo "Name is $nam <br> Age is $age";















?> 







