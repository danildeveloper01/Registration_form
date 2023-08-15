<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Registration</h1>
                <form action="check.php" method="post" class="mt-5">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                    <input type="text" class="form-control mt-3" name="name" id="name" placeholder="Name">
                    <input type="password" class="form-control mt-3" name="pass" id="pass" placeholder="Password">
                    <button class="btn btn-success mt-4" type="submit">SUBMIT</button>
                </form>
            </div>
            <div class="col">
                <h1>Authorization</h1>
                <form action="auth.php" method="post" class="mt-5">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                    <input type="password" class="form-control mt-3" name="pass" id="pass" placeholder="Password">
                    <button class="btn btn-success mt-4" type="submit">LOG IN</button>
                </form>
            </div>
        </div>
        <?php else: ?>
            <p>Hi <?= $_COOKIE['user']?>! <a href="/exit.php">Exit</a></p>
        <?php endif; ?>
    </div>

</body>
</html>