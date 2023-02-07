<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <header>
            <ul class="navbar">
                <li><a href="./">Home</a></li>
                <li><a href="./products.blade.php">Products</a></li>
                <li><a href="./account.blade.php">Account</a></li>
                <li><a href="./aboutUs.blade.php">About Us</a></li>
            </ul>
        </header>
        <h1>
            Here we got your account info and managment
        </h1>
    </body>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style-type: none;
        }

        .navbar{
            display: flex;
            width: 100%;
            margin: 0 auto;
            padding: 0 80px;
            justify-content: space-around;
            align-items: center;
            height: 80px;
            background-color: bisque;
        }
        li{
            width: 25%;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</html>