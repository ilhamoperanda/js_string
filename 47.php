<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to test whether a string ends with a specified string</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function endsWith(input, string) {
        var index = input.length - string.length;
        return index >= 0 && input.indexOf(string, index) > -1;
    }
console.log(endsWith('JS string exercises', 'exercises'));