<?php
session_start();
include "config.php";
$_SESSION['display']="";
if(isset($_POST)){

    $id=$_POST['id'];
    addToCart($id);
    echo json_encode($_SESSION['cartArray']);
    
}
function insertProductsToCart($id)
{
    $product=getProduct($id);
    $cartProduct=array(
        "id"=>$product['id'],
        "name"=>$product['name'],
        "price"=>$product['price'],
        "quantity"=>1
    );
    array_push($_SESSION['cartArray'],$cartProduct);
   
}
function getProduct($id)
{
    global $products;
    foreach($products as $product)
    {
        if($id==$product['id'])
         return $product;
    }
}

function addToCart($id)
    {
    foreach($_SESSION['cartArray'] as $key=>$product)
      {
          if($product['id']==$id)
          {
            $_SESSION['cartArray'][$key]['quantity']+=1;
            return;
          }
          
      }
      insertProductsToCart($id);
    }




?>