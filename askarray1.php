<!DOCTYPE html>
<!--  Πράξεις 
       	
-->
<html>
    <head>
        <title>  php - array</title>
        <meta charset="utf-8">
		
    </head>
    <body>
	  <?php  
	        $ar0=[13,34,56,10,"test"];
			var_dump($ar0);
			echo "<br>";
			print_r ($ar0);
			echo "<br>";
			$pl = count($ar0);
			echo "Το πλήθος των στοιχείων του πίνακα είναι $pl <br> ";
			$elem = array_pop($ar0);
			echo " Αφαιρέθηκε το στοιχείο $elem <br> ";
			print_r ($ar0);
			echo "<br>";
			
			array_push($ar0, 234);
			array_push($ar0, 300);
			print_r ($ar0);
			echo " Array shift <br> ";
			array_shift ($ar0);
			print_r ($ar0);
			echo "<br>";
			echo " Array unshift <br> ";
			array_unshift ($ar0, 234);
			print_r ($ar0);
			echo "<br>";
			$merg=implode(",",$ar0);
			echo " $merg  <br> ";
			$pl = count($ar0);
			echo "Το πλήθος των στοιχείων του πίνακα είναι $pl <br> ";
			echo "<br>";
	        $ar1=array(1,2,3,4,5);
			echo "Η τιμή στην θέση 1 είναι  $ar1[1] <br> ";
			$ar1[10]= 125;
			echo "Η τιμή στην θέση 10 είναι  $ar1[10] <br>";
		   echo "Η τιμή στην θέση 9 είναι  $ar1[9] <br>";
		    foreach ($ar1 as $timh){
			   echo " Η τιμη   είναι $timh <br>";
		   }
		   foreach ($ar1 as $key => $value) {
             echo "$value  στην θέση  $key  <br>";
              }
		   echo "-----------------  <br>";
		   $ar2=array();
		   for ($i=0; $i<=10;$i=$i+1){
			   
			   $ar2[$i]= rand(1,1000);
			   
			   
		   }
		   foreach ($ar2 as $timh){
			   echo " Η τιμη   είναι $timh <br>";
		   }
         
	  ?>
    </body>
</html>