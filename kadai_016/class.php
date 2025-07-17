<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       class Food{
        public $name ;
        public $price ;

        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function show_name(){
            echo $this->name;
        }

        public function show_price (){
            echo $this->price;
        }
    }
        
        $food = new Food('porato',250);

        
       class Animal{
        public $name ;
        public $height ;

        public function __construct(string $name, int $height) {
            $this->name = $name;
            $this->height = $height;
        }

        public function show_name(){
            echo $this->name;
        }

        public function show_height (){
            echo $this->height;
        }
    }
        
        $animal = new Animal('dog',60);

         echo "<br>";
        print_r($food);

         echo "<br>";
        print_r($animal);

        echo "<br>";
         $food->show_price();

        echo"<br>";
        $animal->show_height();

        ?>

        

    

       

       
        

 
       
        


       
       
    

        


        
        
        


        ?>

       