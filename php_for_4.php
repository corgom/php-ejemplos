<?php
// salida <table> html usando unicamente HTML+PHP, version 2
?>

<table border="1">

<?php
for($x = 0; $x < 10; $x++)
{
?>
    <tr><td>
    <?php
      echo $x
    ?>
    </td></tr>
<?php
}
?>

</table>
