<?php
// salida <table> html usando unicamente PHP, version 1

echo "<table border=\"1\">";

for($x = 0; $x < 10; $x++)
{
    echo "<tr>";
    echo "<td>";
    echo $x;
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
