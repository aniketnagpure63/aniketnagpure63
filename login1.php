<html>
    <head>
        <body>
            <form action="" method="POST">
                <input type="submit" name="admin_login" value="Admin Login"><br>
                <input type="submit" name="student_login" value="student login"><br>
            </form>
            <?php
            if(isset($_POST['admin_login'])){
                header("Location:admin_login.php");
            }
            if(isset($_POST['student_login'])){
                header("Location:stu_login.php");
            }
            ?>
        </body>
    </head>
</html>