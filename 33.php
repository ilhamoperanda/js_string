<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to remove non-printable ASCII chars.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function remove_non_word (str) {
    if ((str===null) || (str===''))
       return false;
 else
   str = str.toString();
  
var PATTERN = /[^\x20\x2D0-9A-Z\x5Fa-z\xC0-\xD6\xD8-\xF6\xF8-\xFF]/g;
  
  return str.replace(PATTERN, '');
}
console.log(remove_non_word('PHP ~!@#$%^&*()+`-={}[]|\\:";\'/?><., MySQL'));