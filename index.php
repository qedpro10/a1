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
      $test = array("quote1 let the revolution begin", "quote2-let it rain", "quote3 motherfucker", "quote4 die you shitstain");
      echo $test[$index];
      ?>
  <p><?php echo "To announce that there must be no criticism of the president,"; ?></p>
  <p><?php echo "or that we are to stand by the president right or wrong, is not only unpatriotic and servile,"; ?></p>
  <p><?php  echo "but is morally treasonable to the American public."; ?></p>
  <p><?php echo "- Theodore Roosevelt"; ?></p>
</body>
</html>
