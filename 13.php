<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JavaScript program to concatenates a given string n times (default is 1).</title>
</head>
<body>
</body>
</html>
JavaScript Code :

repeat = function repeat(str, count) {
    if(typeof(count) == "undefined") {
    count =1;
  }
  return count < 1 ? '' : new Array(count + 1).join(str);
    }
console.log(repeat('Ha!'));
console.log(repeat('Ha!',2));
console.log(repeat('Ha!',3));