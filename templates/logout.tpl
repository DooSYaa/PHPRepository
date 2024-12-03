<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logout</title>
    <style>
        @font-face {
            font-family: 'Custom';
            src: url('templates/fonts/pc-senior/pcsenior.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'Custom';
            font-size: 40px;
            color: white;
            background: black;
            text-align: center;
        }
    </style>
</head>
<body>
{include file="_header.tpl"}
    <h1>Logout Page</h1>
    <form action="">
        <h2>Are you sure want to <span style="color: darkred">logout</span>?</h2>
        <h4>Account:</h4>
        <h5>Username: {$username}</h5>
        <h5>Email: {$email}</h5>
    </form>
</body>
</html>