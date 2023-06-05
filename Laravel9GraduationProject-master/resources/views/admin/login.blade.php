<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login</title>
    <link href="style.css" rel="stylesheet">


    <style media="screen">

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            justify-content: center;
            min-height: 100vh;
            background: #9683a8;
            display: flex;
            align-items: center;
        }

        .form {
            position: relative;
            background: #0c0116;
            overflow: hidden;
            box-shadow: 0px 0px 10px 0px rgb(116, 119, 114);
            border-radius: 5px;
            padding: 60px 15px;
            width: 270px;
            height: 350px;
        }

        .form-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            background: #6d5a7e;
            height: 98%;
            width: 98%;
            transform: translate(-50%, -50%);
        }

        .content {
            width: 100%;
            padding: 25px;
            height: 100%;
        }

        .form-inner h2 {
            text-align: center;
            padding-top: 35px;
            font-size: 25px;
            color: #d7a3d7;
        }

        .input {
            display: block;
            padding: 12px 15px;
            border: 1.5px solid rgb(109, 87, 121);
            outline: none;
            background: #19052c;
            color: white;
            width: 100%;
            left: 50%;
            border-radius: 10px;
            margin-top: 20px;
        }

        .btn {
            margin-top: 40px;
            width: 100%;
            cursor: pointer;
            color: white;
            border: none;
            font-size: 18px;
            border-radius: 10px;
            transition: 0.4s;
            padding: 12px;
            outline: none;
            background: #800080;
        }

        .btn:hover {
            background: #c907c9;
        }

        .form span {
            height: 50%;
            width: 50%;
            position: absolute;
        }

        .form span:nth-child(1) {
            background: #ffda05;
            animation: 5s span1 infinite linear;
            animation-delay: 1s;
            top: 0;
            left: -48%;
        }

        .form span:nth-child(2) {
            background: #00a800;
            bottom: 0;
            right: -48%;
            animation: 5s span2 infinite linear;
        }

        .form span:nth-child(3) {
            background: #800080;
            top: 0px;
            animation: 5s span3 infinite linear;
            right: -48%;
        }

        .form span:nth-child(4) {
            animation: 5s span4 infinite linear;
            animation-delay: 1s;
            background: #ff0000;
            bottom: 0;
            right: -48%;
        }

        @keyframes span1 {
            0% {
                top: -48%;
                left: -48%;
            }
            25% {
                top: -48%;
                left: 98%;
            }
            50% {
                top: 98%;
                left: 98%;
            }
            75% {
                top: 98%;
                left: -48%;
            }
            100% {
                top: -48%;
                left: -48%;
            }
        }

        @keyframes span2 {
            0% {
                bottom: -48%;
                right: -48%;
            }
            25% {
                bottom: -48%;
                right: 98%;
            }
            50% {
                bottom: 98%;
                right: 98%;
            }
            75% {
                bottom: 98%;
                right: -48%;
            }
            100% {
                bottom: -48%;
                right: -48%;
            }
        }

        @keyframes span3 {
            0% {
                top: -48%;
                left: -48%;
            }
            25% {
                top: -48%;
                left: 98%;
            }
            50% {
                top: 98%;
                left: 98%;
            }
            75% {
                top: 98%;
                left: -48%;
            }
            100% {
                top: -48%;
                left: -48%;
            }
        }

        @keyframes span4 {
            0% {
                bottom: -48%;
                right: -48%;
            }
            25% {
                bottom: -48%;
                right: 98%;
            }
            50% {
                bottom: 98%;
                right: 98%;
            }
            75% {
                bottom: 98%;
                right: -48%;
            }
            100% {
                bottom: -48%;
                right: -48%;
            }
        }
    </style>
</head>
<body>



<span></span>
<span></span>
<span></span>
<span></span>
<div class="form-inner">

    <h2>Graduation Project Admin</h2>
    <div class="content">
        <form role="form" action="{{route('loginadmincheck')}}" method="post">
            @csrf
            <input class="input" type="email" placeholder="Username" id="username" name="email"/>
            <input class="input" type="password" placeholder="Password" id="password" name="password"/>
            <button class="btn btn-primary" type="submit">LOGIN</button>
        </form>
    </div>
</div>
</body>
</html>


