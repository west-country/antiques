<?php

function detailssString(array $elements): string {
    return "<h2>Name: " . $elements['name'] . "</h2><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>";
}

function detailsString(array $elements): string {
    return "<h2>Name: " . $elements['name'] . "</h2></a><p>Origin: " . $elements['origin'] . "</p><p>Description: " . $elements['description'] . "</p><p>Year: " . $elements['year'] . "</p>" . "<img src='images/" . $elements['image'] . "' alt='Photo of " . $elements['name'] . "' width='200'>";
}