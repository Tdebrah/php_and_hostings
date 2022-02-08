<!DOCTYPE html>
<html>
<head>
    <title>MAKE WAY INVESTMENTS</title>
    <link href="makeway.css" rel="stylesheet">
</head>
<body>
<?php include "header.html"; ?>
<p>
    If you accidentally include the same file (typically functions or classes files)
    more than one time within your code using the include or require statements, it may
    cause conflicts. To prevent this situation, PHP provides include_once and
    require_once statements. These statements behave in the same way as include and
    require statements with one exception.
    The include_once and require_once statements will only include the file once even if
    asked to include it a second time i.e. if the specified file has already been included in
    a previous statement, the file is not included again. To better understand how it works, let's
    check out an example. Suppose we've a 'my_functions.php' file with the following code:
</p>
<p>
    If you accidentally include the same file (typically functions or classes files)
    more than one time within your code using the include or require statements, it may
    cause conflicts. To prevent this situation, PHP provides include_once and
    require_once statements. These statements behave in the same way as include and
    require statements with one exception.
    The include_once and require_once statements will only include the file once even if
    asked to include it a second time i.e. if the specified file has already been included in
    a previous statement, the file is not included again. To better understand how it works, let's
    check out an example. Suppose we've a 'my_functions.php' file with the following code: <br>
    <a href="register.html">Register Here</a>
</p>

<footer>
    <?php include "footer.html"; ?>
</footer>
</body>
</html>