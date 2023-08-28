<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="">Full Name</label>
        <input type="text" name="name" required><br>

        <label for="">Phone number</label>
        <input type="number" name="number" required><br>

        <label for="">Email</label>
        <input type="email" name="email" required><br>

        <label for="">Subject</label>
        <input type="text" name="subject" required><br>

        <label for="">Message</label>
        <textarea name="" id="" cols="30" rows="10" name="message" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>