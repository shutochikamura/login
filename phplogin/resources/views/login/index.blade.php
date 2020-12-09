<html>

<head>
    <title>@yield('title')</title>
    <style>
        .content {
            border: double;
            padding: 15px;
            margin: 15px;
        }

        h1 {
            font-size: 25pt;
            color: darkslategrey;
        }

        p {
            font-size: 15pt;
        }

        .title {
            background-color: lightgray;
            border-bottom: solid grey;
        }

        .textbox {
            display: block;
            padding: 5px;
        }

        .text {
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="content">
        <h1 class="title">ログイン画面</h1>
        @csrf

        <form action="login" method="post">
            <div class=textbox>
                <p name="usermail">usermail:</p>
                <input class="text" name="usermail" type="text">
            </div>
            <div class="textbox">
                <p name="password">password:</p>
                <input class="text" name="password" type="password">
            </div>
            <input type="submit" value="login">
        </form>
        <a href="userName">Forgot your password?</a>
    </div>

</body>

</html>
