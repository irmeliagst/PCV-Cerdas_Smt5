<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* Mengatur konten berada di tengah secara horizontal */
            align-items: center; /* Mengatur konten berada di tengah secara vertikal */
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            text-align: center; /* To center the content horizontally */
        }
        #gambar {
            margin-right: 20px;
            width: 200px;
        }
        .btn-above-image {
            margin-bottom: 10px; /* Adds space between the button and the image */
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/one.png" id="gambar" alt="Gambar Saya">
    </div>

    <script src="scripts.js"></script>
</body>
</html>
