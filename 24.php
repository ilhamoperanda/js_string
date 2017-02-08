<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>JavaScript function to truncate a string to a certain number of words</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function truncate(str, no_words) {
    return str.split(" ").splice(0,no_words).join(" ");
}

console.log(truncate('The quick brown fox jumps over the lazy dog', 4));