<table border="1">
    <?php
    $i = 1;

    do {
        echo "<tr>
    <td>" . $i . "</td>
    <td>rama " . $i . "</td>
    </tr>";
        $i++;
    } while ($i < 100);
    ?>
</table>