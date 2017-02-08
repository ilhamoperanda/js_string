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

string_parameterize = function (str1) {
    return str1.trim().toLowerCase().replace(/[^a-zA-Z0-9 -]/, "").replace(/\s/g, "-");
};
console.log(string_parameterize("Robin Singh from USA."));