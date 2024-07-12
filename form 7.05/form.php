<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="Graphic art.png">
</head>
<body>
    <div class="form-container">
        <form action="process.php" method="post">
            <h2>User Details Form</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
