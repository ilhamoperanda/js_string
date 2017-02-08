<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to remove HTML/XML tags from string</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function strip_html_tags(str)
{
   if ((str===null) || (str===''))
       return false;
  else
   str = str.toString();
  return str.replace(/<[^>]*>/g, '');
}

console.log(strip_html_tags('
PHP Exercises

'));