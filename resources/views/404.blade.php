<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Site Maintenance</title>
    <style>
        body {
            text-align: center;
            padding: 150px;
        }

        h1 {
            font-size: 50px;
        }

        body {
            font: 20px Helvetica, sans-serif;
            color: #333;
        }

        article {
            display: block;
            text-align: left;
            width: 650px;
            margin: 0 auto;
        }

        a {
            color: wheat;
            text-decoration: none;
            background-color: #00aeae;
            border-radius: 6px;
            padding: 7px;
        }

        a:hover {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body class="antialiased">
<article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. Editing page is under
            construction :) <br><br>
            <a href="{{route('employeePanel.index')}}">Back to List Of Employee</a>
        </p>
        <p>&mdash; Amirhossein MansourSamaee</p>
    </div>
</article>
</body>
</html>
