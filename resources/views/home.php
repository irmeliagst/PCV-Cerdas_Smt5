<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

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
        .content {
            width: 80%;
            margin: 0 auto;
        }

        .left-side {
            background: white;
            border-radius: 20px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-side {
            background: white;
            border-radius: 20px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-side img {
            width: 100%;
            height: 65%;
        }

        .tools-top {
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tools-top a {
            margin: 5px;
        }

        @media only screen and (max-width: 767px) {
            .content {
                width: 100%;
                padding: 20px;
            }

            .left-side {
                height: 500px;
            }

            .right-side {
                height: 500px;
            }
        }

    </style>
</head>

<body>
    <div class="content">
        <div class="row">
            <div class="col-4">
                <div class="tools-top"></div>
                <div class="left-side">
                    <img src="img/one.png">
                </div>
            </div>
            <div class="col-8">
                <div class="tools-top"><a class="btn btn-warning"><i class="fas fa-edit text-white"onclick="enableDrawing()"></i></a> <a class="btn btn-danger"><i class="fas fa-trash-alt text-white"></i></a></div>
                <div class="right-side">
                </div>
                <div class="tools-top mt-2"><a class="btn btn-lg btn-success" style="background: #0e7600;">Periksa <i class="fas fa-check-circle"></i></a></div>
            </div>
        </div>
    </div>

</body>

</html>
