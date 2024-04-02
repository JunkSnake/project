<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <form class="card" action="register.php" method="post">
                <div class="form-group">
                    <label for="emailInput">Адрес электронной почты:</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        id="emailInput" 
                        placeholder="name@mail.ru" 
                        name="login"
                    >
                    <small id="emailHelp" class="form-text text-muted">Введите адрес вашей электронной почты</small>
                    <label for="passInput">Пароль:</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        id="passInput" 
                        placeholder="ExAm5lE1" 
                        name="password"
                    >
                    <small id="passInputHelp" class="form-text text-muted">Пароль должен состоять из латинских символов A-z и цифр 0-9</small>
                    <label for="passInput2">Повторите пароль:</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        id="passInput2" 
                        placeholder="ExAm5lE1" 
                        name="passwordR"
                    >
                    <small id="passInputHelp1" class="form-text text-muted">Повторите свой пароль</small>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </div>      
            </form>
        </div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
if (isset($_GET['error'])) {
    $errorMessage = $_GET['error'];
    echo '<div class="alert alert-danger" role="alert">' . $errorMessage . '</div>';
}
?>
