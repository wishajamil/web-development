<?php 
if(isset($_POST["name"]) && isset($_POST["email"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = "wisha.jamil13@gmail.com"; // this is your Email address
    $subject = "new subcriber";
    $body = '<html>
                <body>
                    <h2> feedback = example.com</h2>
                    <hr>
                    <p>name<br>'.$name'</p>
                    <p>email<br>'.$email'</p>
                </body>
            </html>'
            
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MINE-Version: 1.0/r/n";
    $headers .= "Content-type: text/html; charset-utf-8";

    

    $from = "WPSummer@cs.gsu.edu"; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $send = mail($to, $subject, $message, $headers);
    if($send) {
        echo '<br>';
        echo 'thanks for contanting me. I will be with you shortly';
    } else {
        echo 'error';
    }
}
?>
<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>