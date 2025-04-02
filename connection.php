<html>
    <body>
        <?php
            $con = new mysqli("localhost" , "root" , "" , "students_db");
            if (!$con)
            {
                die('Could not connect: ' . mysqli_connect_error());
            }
        ?>
    </body>
</html>