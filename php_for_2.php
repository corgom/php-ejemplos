<?php
// salida <table> html usando unicamente PHP, version 2

echo "<table>";

for($x = 0; $x < 10; $x++)
{
    echo "<tr><td>" . $x . "</td></tr>";
}

echo "</table>";
?>
