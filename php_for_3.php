<?php
// salida <table> html usando unicamente HTML+PHP, version 1
?>

<table border="1">

<?php
for($x = 0; $x < 10; $x++)
{
    echo "<tr><td>" . $x . "</td></tr>";
}
?>

</table>
