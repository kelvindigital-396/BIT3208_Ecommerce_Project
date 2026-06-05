<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"week3db"
);

if($conn)
{
echo "Database Connected";
}
else
{
echo "Connection Failed";
}

?>