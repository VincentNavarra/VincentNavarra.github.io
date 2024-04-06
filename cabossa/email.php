<?php
$sql = "SELECT email FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["email"];
  }
} else {
  echo "ERROR";
}
?>