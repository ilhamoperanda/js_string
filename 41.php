<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to capitalize each word in the string.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function capitalizeWords(str)
{
 return str.replace(/\w\S*/g, function(txt){return txt.substr(0).toUpperCase();});
}
console.log(capitalizeWords('js string exercises'));