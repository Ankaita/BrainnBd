<?php

$con = mysqli_connect('localhost', 'root');

if ($con){
    echo "Connection successful"; 
}else{
  echo "No connection";

}

mysqli_select_db($con, 'bdwebsite');

$hisWish = $_POST['hisWish']; 
$favElement = $_POST['favElement'];
$review = $_POST['review'];

$query= "insert into userinfodata (hisWish, favElement, review)
values ('$hisWish' ,'$favElement', '$review' ) ";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>