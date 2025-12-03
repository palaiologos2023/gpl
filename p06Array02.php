<?php
$ar1 = ["ντομάτες ", "αυγά", "ζαχαρη","τυρί", "γάλα"];
echo "<ol>";
foreach ($ar1 as $value) {
	echo "<li>  $value  </li>" ;
	
  }
  echo "</ol>"; 



$students[0]="Nikos";
$students[1]="Maria";
$students[]="john";
$students["last"]="white";
$students[]="Jim";
$students[7]="Davis";
$students[]="Ann";
$students[36]="Tim";
print $students;
print "<br>";
print_r($students);
$i = 0;
print "<br>";
foreach ($students as $elem)
{
	 $i=$i+1;
	print "O $i student is   $elem <br> ";
	$possition = array_search($elem,$students);
	print " with index  $possition <br>";
	
}
$sizeStudents=sizeof($students);
print "The array students has $sizeStudents elements   <br> ";
for ($i=0; $i<$sizeStudents; $i=$i+1)
{

  print " $students[$i] ";
  print "<br>";
} 
print " The student with index last is ". $students['last'] ;

?>