<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to create a case-insensitive search.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function case_insensitive_search(str, search_str)
  {
    var result= str.search(new RegExp(search_str, "i"));
  
    if (result>0)
    return 'Matched';
    else
    return 'Not Matched';  
   }

console.log(case_insensitive_search('JavaScript Exercises', 'exercises'));

console.log(case_insensitive_search('JavaScript Exercises', 'Exercises'));
