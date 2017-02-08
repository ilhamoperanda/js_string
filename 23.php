<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to strip leading and trailing spaces from a string.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function strip(str) {
    return str.replace(/^\s+|\s+$/g, '');
}

console.log(strip('w3resource '));
console.log(strip(' w3resource'));
console.log(strip(' w3resource  '));