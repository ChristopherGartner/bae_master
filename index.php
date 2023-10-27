<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
    <h1>Test Form</h1>
    <div class="container">
        <form action="connect.php" method="post">
            <div>
                <label>First Name</label>
                <input type="text" name="firstName" placeholder="Enter first name">
            </div>
            <div>
                <label>Last Name</label>
                <input type="text" name="lastName" placeholder="Enter last name">
            </div>
            <div>
                <label>Gender</label>
                <input type="radio" name="gender" value="M" >Male
                <input type="radio" name="gender" value="F" >Female
                <input type="radio" name="gender" value="D" >Diverse
            </div>
            <div>
                <label>Birthdate</label>
                <input type="date" name="birthDate" placeholder="Enter Birthday">
            </div>
            <div class="btn">
                <button type="submit">Submit Data</button>
            </div>
        </form>

    </div>

</body>
</html>