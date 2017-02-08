<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JS string : is blank</title>
</head>
<body>
</body>
</html>
JavaScript Code :

is_Blank =  function(input) {
        if (input.length === 0)
        return true;
        else 
        return false;
      }
console.log(is_Blank(''));
console.log(is_Blank('abc'));