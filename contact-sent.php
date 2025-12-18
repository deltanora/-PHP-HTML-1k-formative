<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paldies!</h1>
    <p>Jūsu informācija ir veiksmīgi nosūtita.</p>

    <h2>Iesniegtie dati:</h2>

    <ul>
        <li><strong>Vārds:</strong>
            <?php echo htmlspecialchars($_POST['name'] ?? ''); ?>
        </li>
        <li><strong>E-pasts:</strong>
            <?php echo htmlspecialchars($_POST['email'] ?? ''); ?>
        </li>
        <li><strong>Ziņa:</strong><br>
            <?php echo nl2br(htmlspecialchars($_POST['message'] ?? '')); ?>
        </li>
    </ul>

    <p>
        <a href="contact.php">Atgriezties pie kontaktformas</a>
    </p>



</body>
</html>