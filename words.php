<!DOCTYPE html>
<html>
<head>
    <title> count </title>
</head>

<body>

<?php
    function countWords($str) {
        $str = strtolower($str);
        $str = str_replace(' ', '', $str);
        $array = str_split($str);
        $arrayCount = array_count_values($array);

        foreach ($arrayCount as $key => $value) {
            echo $key . "  =  " . $value . '<br>';
        }
    }
    function words($str) {
   		$str = strtolower($str);
		$str = explode(' ', $str);
		$arrayCount = array_count_values($str); 
	
    	foreach ($arrayCount as $key => $value) {
            echo $key . "  =  " . $value . '<br>';
		}
	}
    countWords("Web Programming");
    words("Hello world, hello web programing");
?>

</body>
</html>