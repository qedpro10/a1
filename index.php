<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <?php include('includes/htmlhead.php'); ?>
</head>

<body>
   <h1>
      Jen Smith
   </h1>
   <div class="center">
      <img src="images/jas.jpg" width="300" alt="JAS in 1965"/>
   </div>
   <div class="center">
      <h2>A Little About Me</h2>
      <p>I like getting my hands dirty.  It appears that I always have. I'm house trained, love car rides but I don't walk well on a leash.</p>
      <p>I growl at mean people and will bite republicans. I'm the most sarcastic person you'll ever meet.</p>
      <p>Most people don't get me.  Are you one of them?  Too bad - I don't care.</p>
   </div>
   <div class="center">
      <h2>Favorite Quotes</h2>
      <?php
         if (($file = fopen('includes/quotes.csv', "r")) !== FALSE) {
            // parse the contents of the file into a 2D Array
            while (($quote = fgetcsv($file, 0, ",")) !== FALSE) {
               $quotes[] = $quote;
            }
         }
         fclose($file);

         $numQuotes = sizeof($quotes);
         $index = rand(0, $numQuotes-1);
      ?>
      <p> <?php echo $quotes[$index][1] ?> </p>
      <p> <?php
            if ($quotes[$index][2] != "") {
               // we have an additional clarification on the author
               echo "- " . $quotes[$index][0] . ",  " . $quotes[$index][2];
            }
            else {
               echo "- " . $quotes[$index][0];
            }
         ?>
      </p>
   </div>
</body>
</html>
