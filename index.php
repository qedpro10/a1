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
      if (($file = fopen('includes/quotes.csv', "r")) !== FALSE) {
         // parse the contents of the file into a 2D Array
         while (($quote = fgetcsv($file, 0, ",")) !== FALSE) {
            $quotes[] = $quote;
         }
      }
      fclose($file);
      $numQuotes = sizeof($quotes);
      echo "numQuotes = " . $numQuotes;
      $index = rand(0, $numQuotes-1);
      echo "index = " . $index;
   ?>
   <p> <?php echo $quotes[$index][1] ?> </p>
   <p> <?php echo "-" . $quotes[$index][0] ?> </p>
</body>
</html>
