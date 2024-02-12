<?php
// set the cookie for 60 seconds
// Syntax: setcookie("cookies_name","value",time,path);
setcookie("username", "annasaheb", time()+60);
?>
<html>
    <body>
    
    <?php
    // check if the cookie exists
    if(isset($_COOKIE["username"]))
    {
        echo "Cookie set with value: ".$_COOKIE["username"];
    }
    else
    {
        echo "cookie not set!";
    }
    ?>
    
    </body>
</html>