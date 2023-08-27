<?php
        include '../dbbroker.php';

        include '../home.php';

        if(isset($_POST['deletesend'])){
            $result= Laptop::deleteLaptop($_POST['deletesend'],$conn);
             
      }


?>