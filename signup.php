<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
    <style>
        body{
            display: inline-block;
            margin-left: 50%;
            margin-right: 50%;
            transform: translate(-50%, 0%);
        }
    </style>
</head>
<body>
    <h1>Signup</h1>
    
    <form action="signup-process.php" method="POST" id="signup" novalidate>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        
        <button>Sign up</button>
    </form>
</body>
</html>