<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form class="card" action="login.php" method="post">
                    <div class="container">
                        <div class="form-group">
                            <label for="emailInput">Адрес электронной почты:</label>
                            <input 
                                type="email" 
                                class="form-control" 
                                id="emailInput" 
                                placeholder="name@mail.ru" 
                                name="login"
                            >
                        </div>
                        <div class="form-group">
                            <label for="passInput">Пароль:</label>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="passInput" 
                                placeholder="ExAm5lE1" 
                                name="password"
                            >
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mr-2">Авторизация</button>
                                </div>
                                <div class="col">
                                    <a href="registration.php"><button type="button" class="btn btn-primary">Регистрация</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['success'])) {
        $successMessage = $_GET['success'];
        echo '<div class="alert alert-success" role="alert">' . $successMessage . '</div>';
    }
    if (isset($_GET['error'])) {
        $errorMessage = $_GET['error'];
        echo '<div class="alert alert-danger" role="alert">' . $errorMessage . '</div>';
    }
    ?>

    <script src="js/bootstrap.js"></script>
</body>
</html>
