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

function addToDB(PDO $db, array $array) {
	$name = $array[0];
	$origin = $array[1];
	$description = $array[2];
	$year = $array[3]; 
	$image = $array[4];

	$query = $db->prepare('INSERT INTO antiques (name, origin, description, year, image) VALUES (:name, :origin, :description, :year, :image);');
	$query->execute(['name' => $name, 'origin' => $origin, 'description' => $description, 'year' => $year, 'image' => $image]);
	return $query->fetchAll();
	}


function removeFromDB(PDO $db, string $name, string $entryName) {
	if($name = $entryName) {
		$query = $db->prepare('DELETE FROM antiques WHERE name = :name;');
		$query->execute(['name' => $name]);
		return $query->fetchAll();
	}
	else { 
		$counter++
	}
	if($counter === count($array)) {
		throw new Exception("Name field must match existing entry\n");
	}
}