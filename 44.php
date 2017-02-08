<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to test whether the character at the provided character index is lower case</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function isLowerCaseAt(str, index) {
 return str.charAt(index).toLowerCase() === str.charAt(index);
    }
console.log(isLowerCaseAt ('Js STRING EXERCISES', 1));