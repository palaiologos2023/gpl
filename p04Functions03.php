<html>
   <head>
  	<title>Writing PHP Function with Return </title>
   </head>
   <body>

<?php 
// Ορισμός της συνάρτησης 


function add($num1, $num2) 
{ 
    // Υπολογισμός του αθροίσματος
    $sum = $num1 + $num2; // Επιστροφή του αποτελέσματος
return $sum; 
} 
// Κλήση της συνάρτησης και αποθήκευση του αποτελέσματος σε μεταβλητή  
$result = add(5, 10); 
// Εμφάνιση του αποτελέσματος
 echo "Το άθροισμα είναι:  $result" ; 
?>

 </body>
 </html>
