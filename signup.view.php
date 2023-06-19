<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Hello world!</title>
</head>
<style>

    body{
        padding:5em;
        color: #000;
    }

    form{
        width:fit-content;
        margin-left:30em;
        padding:3em;
        padding-top:1em;
        background:rgb(220,220,220);
        border-radius:8px;
        }

    a{
        color:green;
        }

</style>
<body>

    <!-- Navbar -->
   <br><br><br><br>
    <!-- Navbar -->

<div class="form" >

    <form action="signup.php" method="POST" novalidate>
        <h3>Sign-Up Form</Sign-></h3>
        Username <br>
        <input type="text" name="username" required><br>
        Email <br>
        <input type="email" name="email" required><br>
        Password <br>
        <input type="password" name="password" required> <br><br>
        Re-enter Password <br>
        <input type="password" name="password2" required> <br><br>

        <button type="submit">Sign UP</button>

    </form>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>