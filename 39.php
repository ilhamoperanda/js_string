<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to uncapitalize the first character of a string.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function Uncapitalize(str1){
  return str1.charAt(0).toLowerCase() + str1.slice(1);
}