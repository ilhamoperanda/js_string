<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Check whether an input is a string or not</title>
</head>
<body>
</body>
</html>
JavaScript Code :

is_string = function(input) {
  if (Object.prototype.toString.call(input) === '[object String]')
    return true;
  else
    return false;   
    };
console.log(is_string('w3resource'));
console.log(is_string([1, 2, 4, 0]));