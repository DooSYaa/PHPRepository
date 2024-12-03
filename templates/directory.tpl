<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directory</title>
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
            color: #a8a7a7;
        }
        body{
            font-family: 'Custom';
            background-color: black;
            color: white;
            text-align: center;
            justify-content: center;
        }
        table{
            margin: auto;
        }
    </style>
</head>
<body>
{include file="_header.tpl"}
    <h1>Directory Page</h1>
<h3>Directory contents</h3>.
<p>Path: {$directory_path}</p>
<p>Folder_count: {$folder_count}</p>
<p>Number of files: {$file_count}</p>
<p>Total file size: {$total_file_size}</p>

<table border=“1”>
    <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Reading</th>
        <th>Write</th>
        <th>Execution</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$contents item=item}
        <tr>
            <td>{$item.name}</td>
            <td>{$item.type}</td>
            <td>{$item.permissions.read}</td>
            <td>{$item.permissions.write}</td>
            <td>{$item.permissions.execute}</td>
        </tr>
    {/foreach}
    </tbody>
</table>

</body>
</html>