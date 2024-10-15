 <?php

 $marks =110;

 if ($marks >100 || $marks<0){
     echo "invalid marks" ;
     }

     else if ($marks>= 80 && $marks<=100){
         echo("A+");
         }

         else if ($marks>= 70 && $marks<=79){
            echo("A");
         }
             
             else if ($marks>= 60 && $marks<=69){
                 echo("A+");
                 }
                 
                 else if ($marks>= 50 && $marks<=59){
                     echo("B");
                 }
                 
                 else if ($marks>= 40 && $marks<=49){
                     echo("C");
                 }
                 
                 else if ($marks>= 33 && $marks<=39){
                     echo("D");
                 }
                 else
                 {
                     echo("failed");
                 }
          ?>