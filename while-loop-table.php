<table border="1">
    <th>NO</th>
    <th>NAMA</th>
    <?php
    $i = 1;
    while ($i < 100) {
        echo "<tr>
            <td>" . $i . "</td>
            <td>rama " . $i . "</td>
        </tr>";
        $i++;
    }
    ?>

</table>