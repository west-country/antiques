<?php

function displaySpoonDetails(array $spoonRow): string {
    if(
        array_key_exists("name", $spoonRow) 
        && array_key_exists("origin", $spoonRow) 
        && array_key_exists("description", $spoonRow) 
        && array_key_exists("year", $spoonRow) 
        && array_key_exists("image", $spoonRow)) {
            return "<h2>" . $spoonRow["name"] . 
            "</h2><p>Origin: " . $spoonRow["origin"] . 
            "</p><p>Description: " . $spoonRow["description"] . 
            "</p><p>Year: " . $spoonRow["year"] . "</p>" . 
            "<img src='images/" . $spoonRow["image"] . 
            "' alt='" . $spoonRow["name"] . "'>";
        }
    throw new Exception("array keys must include: name, origin, description, year, and image file ref\n");
}