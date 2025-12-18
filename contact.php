<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Sazinieties ar mums</h1>

    <form action="contact-sent.php" method="post">
        <p>
            <label for="name">Vārds:</label><br>
            <input type="text" id="name" name="name" required>
        </p>

        <p>
            <label for="email">E-pasts:</label><br>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="message">Atsauksme:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea>
        </p>

        <button type="submit">Nosūtīt</button>
    </form>

</body>
</html>
