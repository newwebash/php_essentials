<!DOCTYPE html>

<html>
  <head>
    <title>Pointers</title>
  </head>
  <body>
    <?php 
    
        $ages = array(4,8,15,16,23,42);

        // current: current pointer value
        echo "1: " . current($ages) . "<br />";


        // next: move the pointer forward
        // similar to using "continue" inside a loop
        next($ages);
        echo "2: " . current($ages) . "<br />";

        reset($ages);

        // while loop that moves the array pointer
        // similar to foreach
        while ($age = current($ages)) {
            echo $age . ", ";
            next($ages);
        }
    
    ?> 
  </body>
</html>