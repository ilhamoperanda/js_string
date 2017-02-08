<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JS swap case</title>
</head>
<body>
</body>
</html>
JavaScript Code :

swapcase = function swapcase(str) {
        return str.replace(/([a-z]+)|([A-Z]+)/g, function(match, chr) {
            return chr ? match.toUpperCase() : match.toLowerCase();
        });
    }
console.log(swapcase('AaBbc'));