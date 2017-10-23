<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");

  if ($t > "21" || $t < "5") {
      echo "Have a good night!";
  } elseif ($t > "5" && $t < "12") {
      echo "Have a good morning!";
    } elseif ($t > "12" && $t < "17") {
        echo "Have a good afternoon!";
      } elseif ($t > "17" && $t < "21") {
          echo "Have a good evening!";
        }
?> 

</body>
</html>