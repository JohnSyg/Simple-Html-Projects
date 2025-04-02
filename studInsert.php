<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Students Data Base</title>
    </head>

    <body>
        <?php 
            include 'connection.php';

            $A = $_POST['A'];
            $B = $_POST['B'];
            $C = $_POST['C'];
            $D = $_POST['D'];
            $E = $_POST['E'];

            $sql = ("INSERT INTO students (sam, sname, ssurname, sfather, syear) VALUES ('$A' , '$B' , '$C' , '$D' , '$E')");
            if ($con->query($sql) === TRUE) 
            {
                echo "Η νέα καταχώρηση ολοκληρώθηκε επιτυχώς";
            } 
            else 
            {
                echo "Σφάλμα " . $sql . "<br>" . $con->error;
            }

        ?>

        <p>   
            <br><a href="studList.php">Προβολή λίστας</a>
        </p>
    </body>
</html>     