<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>h1fdv, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start( );
        if (isset($_SESSION["count"]))
        $_SESSION["count"] = $_SESSION["count"] + 1;
        else
        $_SESSION["count"] = 1;

        print "Bạn đã truy cập trang này " .
        $_SESSION['count']
        . "lần.";
    ?>
</body>
</html>