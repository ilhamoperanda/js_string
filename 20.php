<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function that can pad (left, right) a string to get to a determined length.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function formatted_string(pad, user_str, pad_pos)
{
  if (typeof user_str === 'undefined') 
    return pad;
  if (pad_pos == 'l')
     {
     return (pad + user_str).slice(-pad.length);
     }
  else 
    {
    return (user_str + pad).substring(0, pad.length);
    }
}
console.log(formatted_string('0000',123,'l'));
console.log(formatted_string('00000000',123,''));