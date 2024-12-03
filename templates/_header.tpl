<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <style>
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
    </style>
</head>
<body>
<header>
    <div class="navbar">
        <nav>
            <ul>
                <a href="index.php?page=home">Main</a>
                <a href="index.php?page=login">Login</a>
                <a href="index.php?page=logout">Logout</a>
                <a href="index.php?page=access_link">Access_link</a>
                <a href="index.php?page=email_notification">Email_not...</a>
                <a href="index.php?page=directory">Directory</a>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>