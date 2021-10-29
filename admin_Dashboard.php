<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <?php
    session_start();
    $con=mysqli_connect("localhost","root","","aniket");
    ?>
    <body>
        <div id="x1" style="position:absolute;left:0;top:0;background-color:black;color:white;width:100%;height:12%;text-align:center;font-size:20">STUDENT MANAGEMENT SYSTEM<br>
        E-mail : <?php echo $_SESSION['mail'];?>
        <br> 
        <a href="logout.php">Logout</a>
        </div>

        <div id="x2" style="position:absolute;left:0;top:14%">
        <form action="" method="post">
            <input type="submit" name="search" value="Search Student"><br>
            <input type="submit" name="edit" value="   Edit Student  "><br>
            <input type="submit" name="add" value="   Add Student  "><br>
            <input type="submit" name="delete" value="       Delete       "><br>
        </div>

        <div id="x3" style="position:absolute;left:10%;top:14%;border: 5px groove blue;width:80%;height:60%;">
        <?php
        if(isset($_POST['search']))
        {
            ?>
            <div style="position: absolute;left: 35%;top :10px">
                <form action="" method="post">
                    Enter E-Mail ID : <input type=text name="mail">
                    <input type="submit" name="search_by_mail" value="Search">
                </form>
            <?php
        }
        if(isset($_POST['search_by_mail']))
        {
            $query="SELECT * FROM `student` WHERE MAIL='$_POST[mail]'";
            $query_run=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($query_run))
            {
                ?>
                <br>
               <table>
                   <td>First Name
                   <td>:
                   <td><input type="text" value="<?php echo $row['FNAME'];?>" disabled></td>
                   <tr>
                       <td>Last Name
                       <td>:
                       <td><input type="text" value="<?php echo $row['LNAME'];?>" disabled>
                    </tr>
                    <tr>
                       <td>Mobile No.
                       <td>:
                       <td><input type="text" value="<?php echo $row['MOBILE'];?>" disabled>
                    </tr>
                    <tr>
                       <td>Email Id
                       <td>:
                       <td><input type="text" value="<?php echo $row['MAIL'];?>" disabled>
                    </tr>
                    <tr>
                       <td>Password
                       <td>:
                       <td><input type="text" value="<?php echo $row['PASS'];?>" disabled>
                    </tr>
                   <tr>
                       <td>Confirm Password
                       <td>:
                       <td><input type="text" value="<?php echo $row['CPASS'];?>" disabled>
                    </tr>
               <?php
            }
        }
        ?>

        <?php
        if(isset($_POST['edit']))
        {
            ?>
            <center>
                <form action="" method="post">
                    Enter E-Mail ID : <input type="text" name='mail'>
                    <input type="submit" name="edit_by_mail" value="edit">
                </form>
                <?php
        }
        if(isset($_POST['edit_by_mail']))
        {
            $query="SELECT * FROM `student` WHERE MAIL='$_POST[mail]'";
            $query_run=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($query_run))
            {
                ?>
                <form action="admin_edit.php" method="post">
                    <table>
                        <td>E-MAIL
                        <td>:
                        <td><input type="text" value="<?php echo $row['MAIL'];?>">
                        <tr>
                        <td>PASSWORD
                        <td>:
                        <td><input type="text" value="<?php echo $row['PASS'];?>">
                        <tr>
                        <tr>
                        <td colspan=3><input type="submit" name="edit" value="Save">
                    </table>
                    <input type="submit" name="edit" value="save">
                </form>
                <?php
            }
        }
?>
    </body>
</html>