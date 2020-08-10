<?php

require 'dbconfig.php';

$sql = "SELECT * FROM search";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchALL();


