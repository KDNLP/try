
<?php
include "conn.php";

$sql = "SELECT * FROM customers 
";
$result = $conn->query($sql);

if ($result->num_rows>0){
    echo "<table border = 1 cellspacing=1 cellpadding=1 <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>COMPANY</th>
        <th>JOB TITLE</th>
        <th>CITY</th>
        <th>ADDRESS</th>
    </tr>";

    while($row = $result->fetch_assoc()){
        echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row ["first_name"]."</td>";
            echo "<td>".$row ["last_name"]."</td>";
            echo "<td>".$row["company"]."</td>";
            echo "<td>".$row["job_title"]."</td>";
            echo "<td>".$row["city"]."</td>";
            echo "<td>".$row["address"]."</td>";
            echo "<td><a href=edit_record.php?edit={$row['id']}>EDIT</a>
            |   <a href=delete_record.php?del={$row['id']}>DELETE</a>";
        echo "</tr>";
    }
}
else{
    echo "NO RESULT FOUND.";
}


?>

<a href="add_record.php"> ADD NEW RECORD </a>
