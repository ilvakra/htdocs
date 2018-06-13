<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>
</head>
<body>

<?php
$navigation=['welcome'=>'/galadarbs/public', 'about'=>'/diena1.php', 'contact'=>'/diena1.php'];
?>
<nav>
    <ul>
   <?php

        foreach ($navigation as $name => $url) 
        {
            echo("<li><a href='$url'>$name</a></li>");

            // echo('<li><a href="$url">$name</a></li>');

            // echo('<li><a href="'.$url.'">'.$name.'</a></li>');
        }
   ?> 
    </ul>
</nav>

</body>
</html>