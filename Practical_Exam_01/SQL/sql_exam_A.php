<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "exam";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // query execution select max function
    $sql = "SELECT `name`,`date_hired`,`id`,`department_id`, MAX( salary_id ) AS max FROM employees";

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Date Hired</th>";
                    echo "<th>Dept. ID</th>";
                    echo "<th>Salary. ID</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['id'] . " </td>";
                    echo "<td>" . $row['name'] . " </td>";
                    echo "<td>" . $row['date_hired'] . " </td>";
                    echo "<td>" . $row['department_id'] . " </td>";
                    echo "<td>" . $row['max'] . " </td>";

                echo "</tr>";
            }
            echo "</table>";

            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No Data.";
        }
    } else{
        echo "Something went wrong." . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);


?>