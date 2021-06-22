<!DOCTYPE html>
<html>
<head>
    <title> Print triangle pattern </title>
</head>

<body>

<?php
    function triangle($n) {
        for($i=1; $i <= $n; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                echo "*";
            }
        echo"<br />";
        }
    }
    triangle(5);
?>

</body>
</html>