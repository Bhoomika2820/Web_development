<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$a=$_POST['productid1'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$sql="DELETE
FROM
    `productdetail`
WHERE
    productid = '$a'";
if (mysqli_query($conn, $sql)) {
			echo "Product_id deleted successfully.";
		}
else {
			echo "Product id does not exist.";
		}
