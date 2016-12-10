<?php

ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLVFM8H');</script>
<!-- End Google Tag Manager -->


    <meta charset="UTF-8">
    <title>Signin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
   
    <style>
    html, body{
        height:100%;
    }

    .container{
        height:100%;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    </style>
</head>
<body>

    
<?php

        session_start();

        $username = $_SESSION['username'];

        unset($_SESSION['username']);

        session_destroy();

        Print "<div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 offset-sm-4\">
                            <p>$username has signed out!</p>
                        </div>
                    </div>
                
                    <div class=\"row\">
                        <div class=\"col-sm-6 offset-sm-4\">
                            <p><a href=\"signin.php\">Sign In Igen</a>
                        </div>
                    </div>
            </div>";
        

?>

</body>
</html>