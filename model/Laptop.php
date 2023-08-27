<?php

class Laptop{
    private $id;
    private $model;
    private $description;
    private $price;
    private $user;

    public function __construct($id=null,$model=null,$description=null,$price=null,$user=null ) 
    {
        $this->id=$id;
        $this->model=$model;
        $this->description=$description;
        $this->price=$price;

        $this->user=$user; 

    }


    public static function getAllLaptops($conn){

        $query= "select * from laptop p inner join user u on u.id=p.user";
        return $conn->query($query);
    }


    public static function addLaptop($laptop, $conn){

        $query= "insert into laptop(model,description,price,user ) values('$laptop->model','$laptop->description',$laptop->price,$laptop->user )";
        
        return $conn->query($query);
        

    }


    public static function getLaptopById($id, $conn){

        $query= "select * from laptop p inner join user u on u.id=p.user where p.id=$id";
        
        return $conn->query($query);


    }


    public static function deleteLaptop($id,$conn){

        $query = "delete from laptop where id=$id";
        return $conn->query($query);

    }

    public static function updateLaptop($laptop,$conn){

        $query = "update laptop set model='$laptop->model', description = '$laptop->description', price = $laptop->price where id = $laptop->id";
        return $conn->query($query);

    }



}

?>