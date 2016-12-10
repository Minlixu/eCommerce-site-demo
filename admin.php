<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLVFM8H');</script>
<!-- End Google Tag Manager -->

<?php

 session_start();

 if(!isset($_SESSION["username"]))
 {

     header("Location: signin.php");
     exit;
 }       













































?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>

    <?php

        print "<p>Logged in as {$_SESSION["username"]}</p>";

        print "<p><a href=\"addproduct.php\"> Lägg Till Produkter</a></p>";

        print "<p><a href=\"deleteproduct.php\">Ta Bort Produkter</a></p>";

        Print '<p><a href="signout.php">Sign Out</a>';
    ?>


</body>
</html>