<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <style>
        @font-face {
            font-family: 'Custom';
            src: url('templates/fonts/pc-senior/pcsenior.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            padding: 10px 20px;
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
            font-size: 16px;
            transition: color 0.3s;
        }

        nav ul a:hover {
            color: #a8a7a7; /* Эффект наведения */
        }

        body{
            font-family: 'Custom';
            background-color: black;
            text-align: center;
            justify-content: center;
            color: white;
        }
    </style>
</head>
<body>
<header>
   {if $userName}
       <div class="navbar">
           <nav>
               <ul>
                   <li>
                       <a href="index.php?page=home">Main</a>
                       <a href="index.php?page=access_link">Access_link</a>
                       <a href="index.php?page=email_notification">Email_not...</a>
                       <a href="index.php?page=directory">Directory</a>
                       <a href="#">{$userName}</a>
                       <a href="/services/logout.php">Logout</a>
                   </li>
               </ul>
           </nav>
       </div>
   {else}
       <div class="navbar">
           <nav>
               <ul>
                   <li>
                       <a href="index.php?page=home">Main</a>
                       <a href="index.php?page=access_link">Access_link</a>
                       <a href="index.php?page=email_notification">Email_not...</a>
                       <a href="index.php?page=directory">Directory</a>
                       <a href="index.php?page=login">Login</a>
                   </li>
               </ul>
           </nav>
       </div>
   {/if}
</header>
</body>
</html>