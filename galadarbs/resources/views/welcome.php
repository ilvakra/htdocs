<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>

    <style>

        /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
    display: block;
}
body {
    line-height: 1;
}
ol, ul {
    list-style: none;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}


        nav{
            background-color: lightblue;
        }
        ul{
            padding-left: 0px;
            display: flex;
        }
        li{
            flex: 1;
            display: inline-block;
        }
        li:nth-child(1){
            flex: 3;
        }
        a{  
            /*padding: 10px 20px 10px 20px;*/
            padding: 10px 20px;
            display: inline-block;
            border: 1px solid #000;        
        }

        .container{
            width: 80%;
            margin-left: 10%;
            min-height: 300px;
            background-color: #eee;

        }
        .container:hover{
            -webkit-transition: 100px 2s; /* Safari */
    transition: 100px 2s;
        }

        @media only screen and (max-width: 500px) 
        {
            .container { 
                width: 100%;
                margin-left: 0px;
            }
        }
    </style>
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

<div class="container">
    
</div>

</body>
</html>