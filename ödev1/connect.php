<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = new mysqli('localhost', 'root', '', 'students');
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// VALIDATE
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$gender = $_POST["gender"];

if (empty($full_name) || empty($email) || empty($gender)) {
    die("Error: Fill in all the fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

//  DATA INSERT
$sql = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo " Successful.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// DATABASE LIST
$sql_select_data = "SELECT * FROM students";
$result = $conn->query($sql_select_data);

if ($result->num_rows > 0) {
    echo "<h2>Student List: </h2>";
    echo "<table border = '1'>
            <tr>
            <th>ID</th>
            <th>Full_Name</th>
            <th>Email</th>
            <th>Gender</th>
</tr>";

    while ($row = $result->fetch_assoc()){
        echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['full_name']."</td>
              <td>".$row['email']."</td>
              <td>".$row['gender']."</td>
</tr>";
    }
    echo "</table>";
}
else {
    echo "NOT DATA";
}
$conn->close();
?>