<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="/resources/css/register.css">
</head>
<body>
    <div class="container">
        <h2>Student Registration Form</h2>
        <form id="registrationForm" action="/generate_pdf" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br><br>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
   
</body>
</html>
