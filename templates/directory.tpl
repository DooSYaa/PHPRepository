<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directory</title>
    <style>
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