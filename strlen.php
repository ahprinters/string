<?php
// $str = 'Abdullah';
// echo strlen($str); // 6
// echo "<br>";
// $str = ' ab cd ';
// echo strlen($str); // 7
// =============
// the Arabic (Hello) string below is: 59 bytes and 32 characters
// $utf8 = "السلام علیکم ورحمة الله وبرکاته!";

// // var_export( strlen($utf8) ); // 59
// echo "<br>";
// var_export( mb_strlen($utf8, 'utf8') ); // 32

// ==================

// ok if php.ini default_charset set to UTF-8 (= default value)
$value = "الحمد لله رب العلمين الحمن الرحيم";
mb_strlen($value);
iconv_strlen($value);
// var_dump(mb_strlen($value, "UTF-8"));
var_dump(iconv_strlen($value, "UTF-8"));
// always ok 
// mb_strlen($value, "UTF-8");
// iconv_strlen($value, "UTF-8"); 