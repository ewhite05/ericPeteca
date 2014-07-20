<?php
$con=mysqli_connect("localhost", "ewhite05_ewhite", "1234", "ewhite05_ewhitedb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM peteka WHERE filename=''");

while($col = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $col['filename'] . "</td>";
  echo "<td>" . $col['instructions'] . "</td>";
  echo "<td>" . $col['dueDate'] . "</td>";
  echo "<td>" . $col['responsible'] . "</td>";
  echo "<td>" . $col['requester'] . "</td>";
  echo "<td>" . $col['situation'] . "</td>";
  echo "<td>" . $col['approved'] . "</td>";
  echo "<td>" . $col['download'] . "</td>";
  echo "</tr>";
}

echo "</tbody></table>";

mysqli_close($con);
?>