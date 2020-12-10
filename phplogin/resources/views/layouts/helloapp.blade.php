<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="UTF-8">

    <title>@yield('title')</title>
    <style>
        body {
            width: auto;
            -webkit-text-size-adjust: 100%;
            text-align: center;
        }

        .main {
            padding: 0 4%;
            width: 380px;
            display: inline-table;

        }

        h1 {
            font-size: 25pt;
            color: darkslategrey;
        }

        p {
            font-size: 15pt;
        }

        .content {
            border: outset;
            padding: 15px;
            margin: 0px;
            font-family: 'Yu Gothic';
        }

        .title {
            background-color: lightgray;
            border: inset;
            text-align: center;
            margin-bottom: 0%;
            width: auto;

        }

        .textbox {
            display: inline-block;
            padding: 0 5px 5px 5px;

        }

        .text {
            display: inline-block;
            font-size: 20px;
            width: auto;
        }

        .btn {
            border-radius: 5pt;
            font-size: 20px;
            margin-top: 10px;
            display: inline-block;
            text-align: center;
        }

        .btn:hover {
            opacity: 0.7;
            transition: 0.5s;
        }

        .primary {
            background-color: lightskyblue;
        }
    </style>
</head>

<body>
    <div class="main">

        <div>
            <h1 class="title">@yield('title')</h1>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>

</html>
