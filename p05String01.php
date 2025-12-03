<!DOCTYPE html>
<html>
<head>
        <title>   string  </title>
        <meta charset="utf-8">
	</head>
        <style>
             p { font-size: 25px; }
             h3 {color:red}
        </style>        
<body>
<h1> Strings ως Τύπος Δεδομένων </h1>
<p>
Τα strings στην PHP είναι απλές ακολουθίες χαρακτήρων και οι εντολές  και ή λειτουργίες <br>
 που τα επεξεργάζονται είναι διαδικαστικές (procedural - functions). <br>
Δηλαδή τα strings στην PHP δεν είναι objects όπως στην python, <br>
 αλλά ένας <b>πρωτογενής </b> τύπος δεδομένων. <br>
Χρησιμοποιούμε ενσωματωμένες συναρτήσεις (π.χ. strtoupper()) για την επεξεργασία τους.<br>
</p>
<h2> Σημαντικά Σημεία για Ελληνικούς Χαρακτήρες</h2>
<p>
<b>UTF-8 Υποστήριξη:</b> Φρόντισε το αρχείο σου να είναι αποθηκευμένο ως UTF-8.</b>

Multibyte Συναρτήσεις:</br>
 Για σωστή διαχείριση ελληνικών χαρακτήρων, προτίμησε συναρτήσεις mb_ <br>
 <b> (π.χ. mb_strlen, mb_substr).</b> <br>
</p>
<h3>
<?php  
$st1="Good Morning ";
echo " $st1 <br> ";
echo " Ο πρώτος χαρακτήρας του string $st1[0] <br> " ;
$st1="Καλημέρα σε όλους TEST  ";
echo " $st1 <br> ";
echo " Ο πρώτος χαρακτήρας του string $st1[0] <br> " ;
$grk = mb_substr($st1, 0, 1, "UTF-8");
echo " Ο πρώτος χαρακτήρας του string $grk <br> " ;
echo "Μήκος με strlen() είναι  ";
echo strlen($st1 ); 
echo "<br>";
echo  mb_strlen($st1, "UTF-8");
echo "<br>";
$fch1="α";
echo "Βρίσκει την θέση που είναι ένας χαρακτήρας   με την συνάρτηση strpos ";
$ap=mb_strpos($st1,$fch1,$offset = 0, $encoding = 'UTF-8');
echo " $fch1 είναι στήν θέση $ap <br> " ;
$fch1="α";
$pos=3;
echo "Βρίσκει την θέση που είναι ένας χαρακτήρας  από συγκεκριμένη θέση  ";
$ap=mb_strpos($st1,$fch1,$offset = 3, $encoding = 'UTF-8');
echo " $fch1 είναι στήν θέση $ap <br> " ;
echo strtoupper("ΤΕΣΤ");
echo "<br>";
echo mb_strtolower("teST ΔΔ",'UTF-8');echo "<br>";
echo $st1; echo "<br>";
$l1= mb_strlen($st1,"UTF-8");
echo $l1; echo "<br>";

for ($i=0; $i<$l1; $i++)
{
        echo $st1[$i];        echo "*** ";
        $ch =mb_substr($st1, $i, 1, "UTF-8");
        echo $ch; echo "<br>";
}
?>
</h3>
</body>
</html>

