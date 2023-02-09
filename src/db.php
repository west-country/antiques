<?php

function connectToDb(string $dbName): PDO {
	$connectionString = "mysql:host=db;dbname=$dbName";
	$db = new PDO($connectionString, 'root', 'password');
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getAllAntiques(PDO $db): array {
	$query = $db->prepare('SELECT * FROM antiques ORDER BY name;');
	$query->execute();
	return $query->fetchAll();
}