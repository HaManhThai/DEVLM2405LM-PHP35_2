<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2 class="text-center">Login Form</h2>
        <form action="{{route('storeSession');}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
            </div>
            <div class="form-group">
                <label for="pass">Password :</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>  
            <button type="submit" class="btn btn-primary" name="btnSave">Login</button>
        </form>
    </div>

</body>

</html>
