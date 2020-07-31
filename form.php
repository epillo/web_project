
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form.css">
<link rel="icon" type="image" href="twine.jpg">
</head>
<body>
        <form name="" method="post">
     <div class ="main">
         <p>Name:</p><br>
         <input type="text" name="firstname" placeholder="First Name" autocomplete="off">
          <input type="text" name="secondname" placeholder="Last Name" autocomplete="off"><br><br>
         <P>Email:</P><br>
         <input type="email" name="email" autocomplete="off"><br><br>
         <p>Subject:</p><br>
         <input type="text" name="subject" autocomplete="off"><br><br>
         <p>Message:</p><br>
         <textarea name="comment"></textarea><br><br><br><br>
         <button class='gol' name="contact">SUBMIT</button>
    </div>
    </form>

    <?php

$connection = new mysqli("localhost","root","","epillo");

if (isset($_POST['contact'])) {
    
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

        $query = "INSERT INTO form (firstname, secondname, email, subject, comment)
                                VALUES ('$firstname','$secondname','$email','$subject','$comment')";

        $result = $connection -> query($query);

        if ($result) {

            
            echo ("<meta http-equiv='refresh' content='0;URL=contact us.php'>");

        } else {
            echo "Sorry, we encountered a problem";
        }

    }



?>


</body>
</html>

