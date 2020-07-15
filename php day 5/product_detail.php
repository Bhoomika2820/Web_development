<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$id=$_POST["productid"];
$n=$_POST["productname"];
$p=$_POST["productprice"];
$d=$_POST["productdescription"];

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }
else
  {
    $sql="CREATE TABLE productdetail(
      productid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      productname VARCHAR(30) NOT NULL,
      price INT(6) NOT NULL,
      productdescription VARCHAR(200) NOT NULL
  )";
    if (mysqli_query($conn,$sql))
    {
      echo "Table created successfully";
    }
  }

$sql = "INSERT INTO productdetail(
  productid,
  productname,
  price,
  productdescription
)
VALUES('$id', '$n', '$p', '$d')";

if (mysqli_query($conn, $sql)){
  echo "Data added in the table successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  mysqli_close($conn);
  ?>
