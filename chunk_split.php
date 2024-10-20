

<?php

// Split a string into smaller chunks
// chunk_split() breaks a string into smaller chunks
// $string = "Hello World!";
// echo chunk_split($string, 5, "<br>");
// $string = "The quick brown fox jumps over the lazy dog.";
// echo chunk_split($string, 10, "<br>");
// Returns the chunked string.
// Example Output:
// Hello<Br>World!
// The <br>quick <br>brown <br>fox <br>jump<br>s over <br>the <br>lazy <br>dog.
// ==========================
// format $data using RFC 2045 semantics
// debug this script
error_reporting(E_ALL);
ini_set('display_errors', '1');
$new_string = chunk_split(base64_encode($data));
