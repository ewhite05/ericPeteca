<?php
$con=mysqli_connect("localhost", "ewhite05_ewhite", "1234", "ewhite05_ewhitedb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM peteka ORDER BY dueDate");

while($col = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td><form role=\"form\" action=\"info.php\" method=\"post\"><input type=\"hidden\" name=\"unique\" value=\"". $col['filename'] ."\"><button type=\"submit\" class=\"btn btn-default\">More Info</button></form>";
  echo "<td>" . $col['filename'] . "</td>";
  echo "<td>" . $col['dueDate'] . "</td>";
  echo "<td>3</td>";
  echo "<td><form role=\"form\" action=\"postJob.php\" method=\"post\"><input type=\"file\" id=\"exampleInputFile\"></td>";
  echo "<td><button type=\"submit\" class=\"btn btn-default\">Submit</button></td>";
  echo "</tr>";
}

echo "</tbody></table>";

mysqli_close($con);
?>