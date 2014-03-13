<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<style type="text/css">

.login {
    color: #666;
    width: 300px;
    margin: 100px auto;
    border: 1px solid #ddd;
}

.login-bar{
    width: 220px;
    height: 45px;
    background: #777 url('img/lock.png') no-repeat left;
    color: white;
    padding-top: 35px;
    padding-left: 80px;
}

.login-form{
    margin-left: 60px;
}

</style>
</head>

<body>
    <div class="login">
        <div class="login-bar"> Mohr - Security Systems <br><small>Caronte</small> </div>
        <form method="post" action="level1.php" class="login-form">
            Login: <br>
            <input type="text" name='login' /> <br>
            Senha: <br>
            <input type="password" name='senha' /> <br>
            <input type='submit' value="Efetuar login" />
        </form>
    </div>
</body>
</html>
