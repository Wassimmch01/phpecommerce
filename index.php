<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .bg-custom {
            background: url(img/w13.jpg);
            background-blend-mode: multiply;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        @media(max-width:991px) {
            #offcanvasNavbar {
                background-color: #000050;
                backdrop-filter: blur(10px);
            }
        }

       
    </style>
</head>

<body class=" bg-custom">
    <?php include "incloud/menunav.php" ?>
    <?php include "incloud/main.php" ?>
</body>

</html>