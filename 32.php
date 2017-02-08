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

function remove_non_ascii(str) {
  
  if ((str===null) || (str===''))
       return false;
 else
   str = str.toString();
  
  return str.replace(/[^\x20-\x7E]/g, '');
}

console.log(remove_non_ascii('äÄçÇéÉêPHP-MySQLöÖÐþúÚ'));