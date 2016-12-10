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
    <title>deleteproduct</title>
</head>
<body>


        <form action= "deleteproduct.php" method= "post">
            <p> Product ID: <input type= "number" name= "id"></p>
            <button type="sumbit">Ta Bort</button>

        </form>

        <?php

        if ($_POST["id"]) 
        {
            
            
            $productId = $_POST["id"];
            
            $dbc = mysqli_connect("maria_db", "root","admin", "webbteknik");

            $query = "DELETE FROM products WHERE id=$productId"; 
            

            mysqli_query ($dbc, $query);
            mysqli_close ($dbc);

            print "Produkten har tagits bort från databasen";
           
        }
        else
        {
             print "You maste input product's ID!";
        }

        

        ?>






</body>
</html>