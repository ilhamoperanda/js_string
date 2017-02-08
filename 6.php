<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hide email addresses to protect from unauthorised user</title>
</head>
<body>
</body>
</html>
JavaScript Code :

    protect_email = function (user_email) {
    var avg, splitted, part1, part2;
    splitted = user_email.split("@");
    part1 = splitted[0];
    avg = part1.length / 2;
    part1 = part1.substring(0, (part1.length - avg));
    part2 = splitted[1];
    return part1 + "...@" + part2;
};

console.log(protect_email("robin_singh@example.com"));