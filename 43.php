<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to test whether the character at the provided (character) index is upper case</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function isUpperCaseAt(str, index) {
 return str.charAt(index).toUpperCase() === str.charAt(index);
    }
console.log(isUpperCaseAt('Js STRING EXERCISES', 1));