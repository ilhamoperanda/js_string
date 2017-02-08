<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get the successor of a string</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function guid(len) {
        var buf = [],
            chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
            charlen = chars.length,
            length = len || 32;
            
        for (var i = 0; i < length; i++) {
            buf[i] = chars.charAt(Math.floor(Math.random() * charlen));
        }
        
        return buf.join('');
    }

console.log(guid());  