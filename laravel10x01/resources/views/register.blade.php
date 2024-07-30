<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2 class="text-center">Register Form</h2>
        <form action="{{route('register');}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
                <label for="pass">Password :</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

</body>

</html>
