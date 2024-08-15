<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an Account</p>
            <hr>
            <label for="email">Email</label>
            <input type="text" placeholder="enter email" name="email" required />

            <label for="psw">Password</label>
            <input type="password" placeholder="enter password" name="psw" required />

            <label for="psw-repeat">Repeat Password</label>
            <input type="password" placeholder="repeat password" name="psw-repeat" required />
            <hr>
            <p>By creatin account you agree to our
                <a href="">Terms & Privacy</a>
            </p>
            <button type="submit" class="register-btn">Register</button>
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="">Sign in</a></p>
        </div>
    </form>
</body>

</html>