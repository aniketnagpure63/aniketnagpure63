<html>
<?php
	$mail=$_POST['mail'];
    $password=$_POST['password'];

    session_start();
    if(isset($_POST['submit']))
    {
        $con=mysqli_connect('localhost','root','','aniket');
        $query="SELECT * FROM `admin` WHERE MAIL='$mail'";
        $run=mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($run))
	{
        if($row['MAIL']==$mail)
        {
            if($row['PASSWORD']==$password)
            {
                $_SESSION['mail']=$row['MAIL'];
                echo"Login Successfully";

                header("Location:admin_Dashboard.php");
            }
            else
            {
                echo "Wrong password";
            }
        }
        else
        {
            echo"Wrong mail ID";
        }
    }
    }
    ?>

</html>