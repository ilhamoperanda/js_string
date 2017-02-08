<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to escapes special characters for use in HTML.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function escape_html(str) {
  
 if ((str===null) || (str===''))
       return false;
 else
   str = str.toString();
  
  var map = {
    '&': '&amp;',
	'<': '&lt;',
	'>': '&gt;',
	'"': '&quot;',
	"'": '&#039;'
  };

  return str.replace(/[&<>"']/g, function(m) { return map[m]; });
}
console.log(escape_html('PHP & MySQL'));
console.log(escape_html('3 > 2'));