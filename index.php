<?php
define("VALUES", 6);
$val = 0;
$array = array("12","120","102","152",33,333,4445,666,78788,9998);

?>
<?php
 

for($i = 0; $i <= $val; $i++){
    echo "Serial No. ".$i;
 
    ?> 

    <table border="1">
        <tr>
            <th>SL</th>
            <?php

            for($i = 0; $i < count($array); $i++) {
                if ($i == VALUES) {
                    break;
                }
                echo "<th>Solution ".$i."</th>";
            }
            
             
            // foreach ($output as $key => $html)
            // {
            //     if ($key == VALUES) {
            //         break;
            //      } 
            //     echo "<th>Solution ".$key."</th>";
            // }
            ?>
        </tr>
        <tr>
            <td>Shipping Line</td>
            <?php
            for($i = 0; $i < count($array); $i++) { 
                if ($i == VALUES) {
                    break;
                }
                echo "<td>".$array[$i]."</td>";
            }

            // foreach ($array as $key => $html)
            // {
            //     if ($key == VALUES) {
            //         break;    /* You could also write 'break 1;' here. */
            //     }

            //     echo "<td>".$html."</td>";
            // }
            ?>
        </tr>
        <tr>
            <td>POL</td>
            <?php
            for($i = 0; $i < count($array); $i++) { 
                if ($i == VALUES) {
                    break;
                }
                echo "<td>".$array[$i]."</td>";
            }

            // foreach ($array as $key => $html)
            // {
            //     if ($key == VALUES) {
            //         break;
            //     } 
            //     echo "<td>".$html."</td>";
            // }
            ?>
        </tr>
    </table>
<?php
 
}
?>



<?php
 
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