<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>chop a string into chunks of a given length</title>
</head>
<body>
</body>
</html>
JavaScript Code :

string_chop =  function(str, size){
      if (str == null) return [];
      str = String(str);
      size = ~~size;
return size > 0 ? str.match(new RegExp('.{1,' + size + '}', 'g')) : [str];
}
console.log(string_chop('w3resource'));
console.log(string_chop('w3resource',2));
console.log(string_chop('w3resource',3));