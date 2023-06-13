<?php
define("VALUES", 6);
$val = 0;
$array = array("12","120","102","152",33,333,4445,666,78788,9998);

$chunks = array_chunk($array, VALUES); // Split the array into chunks of size VALUES
$totalChunks = count($chunks); // Get the total number of chunks

for($i = 0; $i < $totalChunks; $i++){
    echo "Serial No. ".($i+1);
    ?> 

    <table border="1">
        <tr>
            <th>SL</th>
            <?php
            foreach ($chunks[$i] as $value) {
                echo "<th>Value - ".$value."</th>";
            }
            ?>
        </tr>
        <tr>
            <td>Shipping Line</td>
            <?php
            foreach ($chunks[$i] as $value) {
                echo "<td>".$value."</td>";
            }
            ?>
        </tr>
        <tr>
            <td>POL</td>
            <?php
            foreach ($chunks[$i] as $value) {
                echo "<td>".$value."</td>";
            }
            ?>
        </tr>
    </table>
    <br>

<?php
}
?>