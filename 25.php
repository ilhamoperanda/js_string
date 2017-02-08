<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to alphabetize a given string.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function alphabetize_string(str) 
{
	
return str.split('').sort().join('').trim();

}
console.log(alphabetize_string('United States'));