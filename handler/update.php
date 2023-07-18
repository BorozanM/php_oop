<?php
    include '../dbbroker.php';
    include '../model/Laptop.php';




    if(isset($_POST['modelupdate']) && isset($_POST['descriptionupdate']) && isset($_POST['priceupdate'])){  
        $laptop = new Laptop($_POST['hiddenData'],$_POST['modelupdate'], $_POST['descriptionupdate'],$_POST['priceupdate'],null);

        $status = Laptop::updateLaptop($laptop,$conn);

        if($status){

            echo 'Success';
         }else{
             echo $status;
             echo 'Failed';
         }
    }

?>