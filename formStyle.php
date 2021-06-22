<html>
<head>
    <title> form and a PHP processor </title> 
</head>

<style>
    .select{
        padding:10px;
        margin:10px;
        border:1px solid black;
        box-shadow:5px 5px 5px #ccc;
    }
</style>

<body>
    <h2> Style Attributes: </h2>
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> <!--Form will send the request on the same page-->
        <h3>Select the Font Color</h3>
            <select name="font-color" class="select" required>
            <option value=''>Select Color of font</option>
            <option value="black">Black</option>
            <option value="white">White</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
            <option value="red">Red</option>
            </select><br><br>

        <h3>Select the Background Color</h3>
            <select name="background-color" class="select" required>
            <option value=''>Select Background-color</option>
            <option value="white">White</option>
            <option value="lightblue">Light Blue</option>
            <option value="lightpink">Light Pink</option>
            <option value="red">Red</option>
            <option value="black">Black</option>
            </select><br><br>

        <h3>Select the Font:</h3>
            <select name="font" class="select" required>
            <option value=''>Select Font</option>
            <option value="times new roman">Times New Roman</option>
            <option value="sans">Sans-Serif</option>
            <option value='Arial'>Arial</option>
            <option value="courier">Courier</option>
            <option value="monospace">Monospace</option>
            </select><br><br>

        <textarea class="select" cols="60" rows="10" name="text" required></textarea><br><br>
        <input type="submit" value="submit" name = "submit">
    </form>
</body>
</html>

<?php   
    if(isset($_POST['submit']))
    {
        $color= $_POST['font-color']; 
        $bgcolor= $_POST['background-color'];
        $font= $_POST['font'];
        $text=$_POST['text'];
        echo "<div style='width:*; color:$color; background-color:$bgcolor;font-family:$font; font-size:20px;'>".$text."</div>";
    }
?>