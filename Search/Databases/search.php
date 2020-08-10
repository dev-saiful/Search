<?php

require "dbconfig.php";

if(isset($_GET['q']))
{
	$q = $_GET['q'];
	$sql = "SELECT * FROM search WHERE Name LIKE :Name or Email LIKE :Email";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":Name",'%'.$q.'%');
	$stmt->bindValue(":Email",'%'.$q.'%');
	$stmt->execute();
}
else
{
	$sql = "SELECT * FROM search";

	$stmt = $conn->prepare($sql);

	$stmt->execute();

	
}

$result = $stmt->fetchALL();