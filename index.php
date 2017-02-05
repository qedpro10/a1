<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <?php include('includes/htmlhead.php'); ?>
</head>
<header>

</header>
<body>
   <?php
      $index = rand(0, 3);
      $row = 1;
      if (($file = fopen('includes/quotes.csv', "r")) !== FALSE) {
         // parse the contents of the file into an Array

         while (($quote = fgetcsv($file, 0, ",")) !== FALSE) {
            $num = count($quote);
            $row++;
            for ($c=0; $c < $num; $c++) {
               echo $quote[$c] . "<br />\n";
            }
         }
      }
      fclose($file);
   ?>
</body>
</html>
