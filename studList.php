<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Students Data Base</title>
    </head>

    <body>
        <p> 
            <?php 
                include 'connection.php';
                $sql = "SELECT sam, ssurname, sname FROM students";
                $result = $con->query($sql);

                if ($result->num_rows > 0) 
                {
                    echo "<table border='1'>
                    <tr>
                        <th>ΑΜ</th>
                        <th>Επώνυμο</th>
                        <th>Όνομα</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "<tr>";
                            echo  "<td>" . $row["sam"]. "</td>";   
                            echo  "<td>" . $row["ssurname"]. "</td>";
                            echo "<td>" . $row["sname"] . "</td>";
                        echo "</tr>";
                    }
                    echo '</table>';
                } 
                else   
                {
                    echo "0 results";
                }
                $con->close();
            ?> 
        </p>
        <p> 
            <a href="studForm.html">Εισαγωγή στην λίστα</a>
        </p>
    </body>

    
</html>