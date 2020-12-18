<?php

session_start();

if (isset($_POST["count_item"])) {
//When user is logged in then we will count number of item in cart by using user session id
if (isset($_SESSION["uid"])) {
$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
}else{
//When user is not logged in then we will count number of item in cart by using users unique ip address
$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
}

$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
echo $row["count_item"];
exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

if (isset($_SESSION["uid"])) {
//When user is logged in this query will execute
$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
}else{
//When user is not logged in this query will execute
$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
}
$query = mysqli_query($con,$sql);
if (isset($_POST["getCartItem"])) {
//display cart item in dropdown menu
if (mysqli_num_rows($query) > 0) {
$n=0;
while ($row=mysqli_fetch_array($query)) {
$n++;
$product_id = $row["product_id"];
$product_title = $row["product_title"];
$product_price = $row["product_price"];
$product_image = $row["product_image"];
$cart_item_id = $row["id"];
$qty = $row["qty"];
echo '
<div class="row">



