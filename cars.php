<?php
require_once("settings.php"); // must come first!

// Step 1: Connect to the database
$dbconn = @mysqli_connect($host, $username, $password, $database);

if (!$dbconn) {
    echo "<p>Unable to connect to the database.</p>";
    exit;
}

// Step 2: Query the cars table
$query = "SELECT * FROM cars";
$result = mysqli_query($dbconn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>Car ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Year of Manufacture</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>There are no cars to display.</p>";
}

mysqli_close($dbconn);
?>
