
<html>
   <head>
  	<title>Writing PHP Function with Parameters</title>
   </head>
   <body>
  	<?php
     function megInt($num1, $num2)
     {
        if ($num1 > $num2) 
            {
             $meg = $num1;
            } 
            else
            {
             $meg = $num2; 
            }
        return $meg;
     	}

        $ar1 =rand(1,1000);
        $ar2= rand(1,1000);
     	$m = megInt($ar1, $ar2);
        echo " O μεγαλύτερος αριθμός μεταξύ $ar1 και $ar2 είναι το  $m "
  	?>
   </body>
</html>

