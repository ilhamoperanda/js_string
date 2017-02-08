<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to uncapitalize each word in the string</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function unCapitalizeWords(str)
{
 return str.replace(/\w\S*/g, function(txt){return txt.substr(0).toLowerCase();});
}
console.log(unCapitalizeWords('JS STRING EXERCISES'));