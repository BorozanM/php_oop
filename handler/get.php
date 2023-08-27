<?php
    include '../dbbroker.php';
    include '../model/Laptop.php';
  

    if(isset($_POST['updateid']) ){
        
        $result = Laptop::getLaptopById($_POST['updateid'],$conn);  
        $response=array();
        while($row=mysqli_fetch_assoc($result)){
            $response = $row;
        }
   
        echo json_encode($response); 
    }else{
        $response['status']=200; 
        $response['message']="Data not found";
    }
?>