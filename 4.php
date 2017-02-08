<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JS Bin</title>
</head>
<body>
</body>
</html>
JavaScript Code :

truncate_string = function (str1, length) {
  
    if ((str1.constructor === String) && (length>0)) {
        return str1.slice(0, length);
    }
};
console.log(truncate_string("Robin Singh",4));