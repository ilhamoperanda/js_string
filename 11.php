<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Javascript camel case</title>
</head>
<body>
</body>
</html>
JavaScript Code :

camelize = function camelize(str) {
      return str.replace(/\W+(.)/g, function(match, chr)
       {
            return chr.toUpperCase();
        });
    }

console.log(camelize("JavaScript Exercises"));
console.log(camelize("JavaScript exercises"));
console.log(camelize("JavaScriptExercises"));