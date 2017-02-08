<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to test case insensitive (except special Unicode characters) string comparison</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function compare_strings(str1, str2)
{
var areEqual = str1.toUpperCase() === str2.toUpperCase();
  return areEqual;
}

console.log(compare_strings('abcd', 'AbcD'));
console.log(compare_strings('ABCD', 'Abce'));