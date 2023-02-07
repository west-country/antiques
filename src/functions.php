<?php

function detailssString(array $elements): string {
    return "<h2>Name: " . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>" . "<img src='images/" . $elements['image'] . "' alt='Photo of " . $elements['name'] . "' width='200'>";
}

function detailsString(array $elements): string {
    //$elementKeys = array_keys($elements);
    //foreach($elementKeys as $key) 
    //{
        if(array_key_exists('name', $elements) && array_key_exists('origin', $elements) && array_key_exists('description', $elements) && array_key_exists('year', $elements) && array_key_exists('image', $elements)) {
            return "<h2>Name: " . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>" . "<img src='images/" . $elements['image'] . "' alt='Photo of " . $elements['name'] . "' width='200'>";
            }
        else {
        throw new Exception('array keys must include: name, origin, description, year, and image file ref');
        }
}

//function detailssString(array $elements): string {
//    return "<h2>Name: " . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>";
//