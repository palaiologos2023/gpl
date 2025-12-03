/<?php
     function nameDayGr() 
         {// Πινακας  με τις ημέρες στα Ελληνικά
     $days_in_greek = 
       [
         "Monday" => "Δευτέρα",
         "Tuesday" => "Τρίτη",
         "Wednesday" => "Τετάρτη",
         "Thursday" => "Πέμπτη",
         "Friday" => "Παρασκευή",
         "Saturday" => "Σάββατο",
         "Sunday" => "Κυριακή"
        ];
      // Λήψη της ημέρας στα Αγγλικά
       $day_in_english = date("l");

      // Εύρεση της ημέρας στα Ελληνικά
      $day_in_greek = $days_in_greek[$day_in_english];
      return $day_in_greek;
    }
    ?>  