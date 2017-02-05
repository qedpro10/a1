<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <?php include('includes/htmlhead.php'); ?>
</head>

<body>
   <header class="center">
      <img src="images/jas.jpg" width="400" alt="JAS in 1965"/>
   </header>
   <div>
      <p>A little about me.  My name is Jen Smith.  I am the most sarcastic person you'll ever meet.
         I like getting my hands dirty.  It appears that I always have.  
         I'm house trained, love car rides but I don't walk well on a leash. I growl at mean people and I will bite assholes.
         Most people don't get me.  Are you one of them?  Too bad - I don't care.</p>
   </div>
   <div class="quote">
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
   <p> <?php echo "- " . $quotes[$index][0] ?> </p>
</div>
</body>
</html>
