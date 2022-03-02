<?php
include 'config.php';
  if(isset($_POST))
  {
      session_start();
      $id=$_POST['id'];
      deleteProduct($id);
      echo json_encode($_SESSION['cartArray']);
  }


  function deleteProduct($id)
    {
        
        foreach($_SESSION['cartArray'] as $key=>$product)
        {
            if($id==$product['id'])
            array_splice($_SESSION['cartArray'],$key,1);
        }
        
    }



?>