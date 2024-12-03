<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Access link</title>
    <style>
        @font-face {
            font-family: 'Custom';
            src: url('templates/fonts/pc-senior/pcsenior.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        header {
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul a {
            color: white;
            text-decoration: none;
            font-size: 36px;
            transition: color 0.3s;
            margin: 20px;
        }

        nav ul a:hover {
            color: #a8a7a7; /* Эффект наведения */
        }
        body{
            font-family: 'Custom';
            background-color: black;
            color: white;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
{include file="_header.tpl"}
    <h1>Access Links</h1>
<h3>Resource Access</h3>.
<p>You have accessed {$resource_name}.</p>
<p>Access link: <a href=“{$resource_link}”>Go to the link</a></p>
<p>Name: {$user_first_name} {$user_last_name}</p>.
<p>Spectpectfully, Application Team.</p>

</body>
</html>