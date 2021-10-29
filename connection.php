<html>
    <head>

    </head>
    <body>

        <?php

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mobile=$_POST['mobile'];
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];

        $con=mysqli_connect('localhost','root','','aniket');
        $query="INSERT INTO `student`(`FNAME`, `LNAME`, `MOBILE`, `MAIL`, `PASS`, `CPASS`) VALUES ('$fname','$lname','$mobile','$mail','$pass','$cpass')";
        $run=mysqli_query($con,$query);

        if($run==TRUE)
        echo "Sucessful";
        else
        echo "Unsucessful";
        ?>
    </body>
</html> 