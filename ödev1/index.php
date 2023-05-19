<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

    </style>
</head>
<body>
<h1>
    Student Registration Form with Database Integration
</h1>

<form action="connect.php" method="post" >

    <label>Full Name:</label><br>
    <input type = "text" id="full_name" name = "full_name" placeholder="text your name" ><br>

    <label>E-Mail:</label><br>
    <input type = "email" id="email" name="email" placeholder="text your e-mail address" ><br>

    <label>Gender:</label><br>

    <input type = "radio" value="male" id="male" name ="gender">
    <label>Male:</label><br>

    <input type = "radio" value="female" id="female" name="gender">
    <label>Female:</label><br>

    <input type = "submit" name="button" value="Submit">

</form>

</body>

</html>