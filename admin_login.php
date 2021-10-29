<html>
    <head>

    </head>
    <body>
    <form action="" method="post">
        <table>
            <td>Email</td>
            <td><input type="text" name="mail" required></td>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td><br>
            </tr>
            <tr>
                <th colspan=3><input type="submit" name="submit"></th>
            </tr>
        </table>
   
 </form>
 <?php


    session_start();
    if(isset($_POST['submit']))
    {
        $con=mysqli_connect('localhost','root','','aniket');
        $query="SELECT * FROM `admin` WHERE MAIL='$_POST[mail]'";
        $run=mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($run))
	{
        if($row['MAIL']==$_POST['mail'])
        {
            if($row['PASSWORD']==$_POST['password'])
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
    
    </body>
</html>
