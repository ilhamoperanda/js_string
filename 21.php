<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to repeat a string a specified times.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function repeat_string(string, count) 
  {
    if ((string == null) || (count < 0) || (count === Infinity) || (count == null))
      {
        return('Error in string or count.');
      }
        count = count | 0; // Floor count.
    return new Array(count + 1).join(string);
  }

console.log(repeat_string('a', 4.6));
console.log(repeat_string('a'));
console.log(repeat_string('a', -2));
console.log(repeat_string('a', Infinity));