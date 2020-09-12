<html>
<body>
<?php
    /*  $x="hello";
        $y=10;

        echo $x;
        echo"<br>";
        echo $y;
    */
/*
        $x=10.25;
        var_dump($x);   //var_dump returns data type and its value
        echo"<br>";
        echo $x;
*/
     /*
        $cars=array("BMW","BENTLEY","AUDII");
        var_dump($cars);
        echo"<br>";
        echo $cars[0];
      */
  // object is a data type which stores data information on how to process data.
  //object must declareed explicitly.   

    /*
    class car
    {
      function car()
      {
      $this->model="Toyota";
      }
     }
     $brand=new car();      // $ brand is an object.
     echo $brand->model;    // show object properties.
     */
/* 
    echo strlen("Japan");                 // retruns the length of string.
    echo"<br>";
    echo str_word_count("Asia Europe");   // retruns the words of string.
    echo"<br>";
    echo strrev("India");                 //  Reverse the string.
    echo"<br>";
    echo str_replace("Assam","Bengal","Assam Is In India");
*/

   /*
    $a=100.25;
    var_dump(is_int($a));      // to check it is integer or not.
    echo"<br>";
    $x="Hello";
    var_dump(is_int($x));
    echo"<br>";
    $x = 23465.768;            // Casting from float to int.
    $int_cast = (int)$x; 
    echo $int_cast;
   */

/*
    echo(pi());                //pi() function returns the value of PI:
    echo"<br>"; 
    echo(min(100,60,20,40));   //min() function show lowest value.
    echo"<br>";
    echo(max(100,60,20,40));   //max() function show highest value.
    echo"<br>";
    echo(sqrt(25));            //sqrt() function returns the square root of a no.
*/ 
   /*
    define("show", "Diplay the text");
    echo show;
    echo"<br><br>";
      
    define("bike", "My Bike IS Pulsar 220");  //uses a constant inside a function, even if it is defined outside the function
    function mybike()
    {
       echo bike;
    }
    mybike();          // calling by function name.
    */

/*   SWITCH STATEMENT  

    $bike="honda";
    switch($bike)
    {
    case "pulasr":
          echo "Your Bike Is Pulasar";
          break;
    case "honda":
          echo "Your Bike Is Honda";
          break;
    default:
          echo"You Have NO Bike";
    }
*/ //WHILE LOOP

   /*
    $x = 1;

    while($x <= 5) 
    {
    echo "The number is: $x <br>";
    $x++;
    }
    */
/*

    function family($name)   //function declaration with one argument
    {
    echo"$name<br>";
    }
   
    family("Donald");        // calling function
    family("Ivanka");
*/

   /*     

    function familynames($fname , $lname)   //function declaration with more than one argument
    {
    echo"$fname $lname<br>";
    }
   
    familynames("Donald","Trump");         // calling function
    */ 
/*

    function addNumbers(int $a, int $b)    //function declaration
    {
    return $a + $b;
    }
 
    echo addNumbers(5,10);                 // calling function
*/

    /*  // Reference variable
    function add(&$value)
    {
    $value += 5;
    }

    $num=5;
    add($num);
    echo $num;
    */













?>
</body>
</html>