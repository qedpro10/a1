<?php require('includes/quoteParser.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <?php include('includes/htmlhead.php'); ?>
</head>

<body>
   <div class="center">
      <h1>Jen Smith</h1>
      <img src="images/jas.jpg" alt="JAS in 1965"/>
   </div>
   <div class="center">
      <h2>A Little About Me</h2>
      <p>I like getting my hands dirty.  It appears that I always have. </p>
      <p>I'm house trained, love car rides but I don't walk well on a leash.</p>
      <p>I growl at mean people and will bite republicans. I'm the most sarcastic person you'll ever meet.</p>
      <p>Most people don't get me.  Are you one of them?  Too bad - I don't care.</p>
   </div>
   <div class="center">
      <h2>Favorite Quotes</h2>
      <p><?php echo $selectedQuote; ?></p>
      <p><?php echo $author; ?></p>
   </div>
</body>
</html>
