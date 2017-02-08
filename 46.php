<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to test whether a string starts with a specified string</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function startsWith(input, string) {
  return input.indexOf(string) === 0;
}
console.log(startsWith('js string exercises', 'js'));