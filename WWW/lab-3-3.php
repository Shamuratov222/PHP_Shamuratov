<html>
<head><title>Shamuratov Damir</title></head>
</html>
<?php
const e= 2.71828;
echo 'Chislo e ravno '.e. '<br>';
$num_el=e;
echo ('$num_el ='.$num_el.'='.gettype($num_el). '<br>');
settype($num_el,"integer");
echo ('$num_el ='.$num_el.'='.gettype($num_el). '<br>');
settype($num_el,"string");
echo ('$num_el ='.$num_el.'='.gettype($num_el). '<br>');
settype($num_el,"boolean");
echo ('$num_el ='.$num_el.'='.gettype($num_el). '<br>');


?>