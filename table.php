<!DOCTYPE html>
<html>
    <body>
        <?php
        $row = $_POST['row'];
        $col = $_POST['col'];

        if($row < 3 && $row > 12) {
            echo 'invalid row input';
        } else if ($col < 3 && $col > 12) {
            echo "invalid column input";
        } else {
            for ($i = 1; $i <=$row;$i++) {
                for ($j=1; $j <= $col;$j++) {
                    echo $i*$j, ' ';
                }
                echo "<br>";
                }
            } 
        ?>
        <a href="./counter.php">Hit Counter</a>
    </body>
</html>
