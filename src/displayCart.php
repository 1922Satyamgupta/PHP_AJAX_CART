<?php 
session_start();
include "config.php";
display();

function display()
    {
       $cartDisplay="";
       $totalprice=0;
       $cartDisplay="<table style='margin-left:30%;'><tr><th>product id</th><th>product name</th><th>product price</th><th>product quantity</th><th>total price</th><th>Action</th></tr>";
      foreach($_SESSION['cartArray'] as $product)
       {
          $cartDisplay.="<tr><td>".$product['id']."</td><td>".$product['name']."</td><td>".$product['price']."</td><td><form action='editQuantity.php' method='post'><input style='display:none' name='input1' value='".$product['id']."'><input name='input11' placeholder='".$product['quantity']."'><button>Edit</button></form></td><td>".$product['price'] * $product['quantity']."</td><td><a href='deleteProduct.php?id=".$product['id']."'>Delete</a></td></tr>";
          $totalprice+=$product['price'] * $product['quantity'];
       }

   
       $cartDisplay.="</table>";
       $cartDisplay.="<br>Total = ".$totalprice."";
       $cartDisplay.="<br><button><a href='emptyCart.php' style='text-decoration:none; font-color:green;'>EMPTY</a>";
       $_SESSION['display']=$cartDisplay;
     
    }
?>