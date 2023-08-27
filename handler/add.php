<?php
    include '../dbbroker.php';

    include '../home.php';
    include '../login.php';
    
    if(  isset($_POST["description"]) && isset($_POST["model"]) && isset($_POST["price"]) ){
        
        
        $laptop = new Laptop(null,$_POST["model"],$_POST["description"],$_POST["price"],1 );
        
        $status= Laptop::addLaptop($laptop,$conn);
        
          if($status){
             echo 'Success';
          }else{
              echo $status;
              echo 'Failed';
          }
    }

  

?>