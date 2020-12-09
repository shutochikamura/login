<html>

<head>

</head>

<body>
    <h1>ユーザー登録画面</h1>
    @csrf
    <form action="login" method="post">
        <p name="name">Name:</p>
        <input name="name" type="text">
        <p name="usermail">Usermail:</p>
        <input name="usermail" type="text">
        <p name="password">Password:</p>
        <input name="password" type="password">
        <p name="password">Comfirm Password:</p>
        <input name="password" type="password">
        <input type="submit" value="登録">
    </form>
    <a href="login">ログイン画面に戻る</a>
</body>

</html>
