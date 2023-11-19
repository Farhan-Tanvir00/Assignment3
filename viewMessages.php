<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Displaying All Data</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "assignment3";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM messages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row["firstname"]."</td>
                            <td>".$row["lastname"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["phone"]."</td>
                            <td>".$row["message"]."</td>
                        </tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
