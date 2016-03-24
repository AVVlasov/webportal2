<?php
phpinfo();


$str = '
db.user  = "user"
db.password  = "pass"
debug = true
app.s.e.r.v.e.r = 123
test.test1 = 11
';

$rgFlat = parse_ini_string($str);
$rgOutput = [];
foreach ($rgFlat as $key => $value) {
 $mRefPoint = &$rgOutput;
 foreach(explode('.', $key) as $key) {
  if (! isset($mRefPoint[ $key ])) {
   $mRefPoint[ $key ] = [];
  }
  $mRefPoint = &$mRefPoint[ $key ];
 }
 if (is_array($mRefPoint))
  $mRefPoint = $value;
 unset($mRefPoint);
}

var_dump($rgOutput);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        1212121221
    </body>
</html>
