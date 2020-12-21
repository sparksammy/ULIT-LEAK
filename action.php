
  <?php 
  $origin = $_SERVER["HTTP_ORIGIN"];
  $referer = $_SERVER["HTTP_REFERER"];
  if ($origin == "https://loginconnector.gyldendal.dk") {
    $explodedstr = explode("?userName=",$referer);
    # use $explodedstr[1] for username
  } else{
    echo "You are not logged in.<br>";
  }
  ?>
