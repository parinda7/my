<?php
require("connect_db.php");
$sql = "SELECT student_code, student_name, gender FROM student";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<center>";
    echo "<table border=1 widit=80%>";
    echo "<tr><th>Student Code</th><th><student Name</th><th>Gender</tr></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["student_code"]. "</td><td>" . $row["student_name"]. "</td><td>" .
        $row["gender"]. "</td><tr>";
    }
    echo "</table>";
    echo "</center>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>