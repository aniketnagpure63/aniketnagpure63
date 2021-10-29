<html>
    <?php
        $con=mysqli_connect("localhost","root","","aniket");
        $query="UPDATE `student` SET PASS='$_PASS[pass]' WHERE MAIL='$_POST[mail]'";
        $query_run=mysqli_query($con,$query);
    
    ?>

    <script type="text/javascript">
    alert("update successful");
    window.location.href="admin_Dashboard.php";
    </script>

    </script>
</html>