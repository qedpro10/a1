<?php
   if (($file = fopen('includes/quotes.csv', "r")) !== FALSE) {
      // parse the contents of the file into a 2D Array
      while (($quote = fgetcsv($file, 0, ",")) !== FALSE) {
         $quotes[] = $quote;
      }
   }
   fclose($file);

   $numQuotes = sizeof($quotes);
   $index = mt_rand(0, $numQuotes-1);

   // init the quote info that needs to be displayed
   $selectedQuote = $quotes[$index][1];
   if ($quotes[$index][2] != "") {
      $author = "- " . $quotes[$index][0] . ", " . $quotes[$index][2];
   }
   else {
      $author = "- " . $quotes[$index][0];
   }
?>
