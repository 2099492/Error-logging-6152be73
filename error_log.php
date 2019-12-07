<?php
$a = 2;
if ($a != 1) {
  error_log("ERROR $a is not 1", 0, "/xampp/htdocs/website/PHP - web/Error-logging-6152be73/errors.log");
  echo "ERROR $a is not 1";
}
?>
