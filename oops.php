
<?php
     //In a class, variables are called properties and functions are called methods!

/*

      class Fruit
      {
         public $name;      // Properties
  
           function set($name)      // Methods
            {
              $this->name = $name;
              return $this->name;
             }
       }
     $apple = new Fruit();           // $apple is an object
     echo $apple->set('Apple');
*/ 
     /*

     class Fruit
      {
        public $name;
      }
      $apple = new Fruit();
      $apple->name = "Apple";       // changing property value outside the class.
      echo $apple->name;

     */

/*
    //constructor...it starts with _(underscores).

   class Fruit 
   {
         public $nameoffruit;
  
    function __construct($nameoffruit)    // declaration of constrctur.
      {
         $this->name = $nameoffruit;
      }
      function get()                     // function name is get. 
      { 
         return $this->name;
      }  
    }

   $apple = new Fruit("Apple");         //$apple is 1st object.
   echo $apple->get();
   echo"<br><br>";
   $banana = new Fruit("Banana");       //$banana os 2nd object.
   echo $banana->get();

*/
    //destructor.it start with (__) two underscores.
 
     class Fruit
     {
     public $name;
     public $color;
     function __construct($name, $color)
     {
     $this->name = $name;
     $this->color = $color;
     }
     function __destruct() 
     {
     echo "The fruit is {$this->name} and the color is {$this->color}.";
     }
   }

$apple = new Fruit("Apple", "red");



























   







?>