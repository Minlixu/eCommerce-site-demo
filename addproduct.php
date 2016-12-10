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
    <title>addproduct</title>
</head>
<body>

        
        <form action= "addproduct.php" method= "post">
            <p> Name: <input type= "text" name= "name"></p>
            <p> Pris: <input type= "number" name= "price"></p>
            <p> Image link:<input type="text" name= "image"></p>
            <button type="sumbit">Add</button>

        </form>

        <?php

        if ($_POST["name"] && $_POST["price"]) 
        {
            $productName = $_POST["name"];
            $productPrice = $_POST["price"];
            $productImage = $_POST["image"];

            if ($productImage)
            {
                $dbc = mysqli_connect("maria_db", "root","admin", "webbteknik");

                $query = "INSERT INTO products(name, image, price) 
                values ('$productName','$productImage','$productPrice')";

                mysqli_query ($dbc, $query);
                mysqli_close ($dbc);

                print "Produkten $productName har lagts till i databasen";
            }
            else{
                $IMAGE_NOT_AVAILABLE_UR ='http://placehold.it/236x324';
                $dbc = mysqli_connect("maria_db", "root","admin", "webbteknik");

                $query = "INSERT INTO products(name, image, price) 
                values ('$productName','$IMAGE_NOT_AVAILABLE_UR','$productPrice')";

                mysqli_query ($dbc, $query);
                mysqli_close ($dbc);

                print "Produkten $productName har lagts till i databasen";

            }
           
        }
        else
        {
             print "You maste input product's name and price!";
        }

        

        ?>






</body>
</html>