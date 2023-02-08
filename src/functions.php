<?php

function detailsString(array $elements): string {
        if(array_key_exists('name', $elements) && array_key_exists('origin', $elements) && array_key_exists('description', $elements) && array_key_exists('year', $elements) && array_key_exists('image', $elements)) {
            return "<h2>" . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>" . "<img src='images/" . $elements['image'] . "' alt='" . $elements['name'] . "' width='200'>";
            }
        else {
            throw new Exception('array keys must include: name, origin, description, year, and image file ref');
        }
}