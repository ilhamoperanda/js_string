<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to escape a HTML string.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function escape_HTML(html_str) {
    'use strict';

    return html_str.replace(/[&<>"]/g, function (tag) {
		var chars_to_replace = {
            '&': '&',
            '<': '<',
            '>': '>',
            '"': '"'
        };

		return chars_to_replace[tag] || tag;
	});
}

console.log(escape_HTML(''));