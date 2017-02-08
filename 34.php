<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to convert a string to title case.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function sentenceCase (str) {
  if ((str===null) || (str===''))
       return false;
  else
   str = str.toString();

 return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

console.log(sentenceCase('PHP exercises. python exercises.'));