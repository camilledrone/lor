<!-- contact.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMovies - Contact</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100" style="background-color:#D7D5D8;">
    <div class="container">

    <?php include_once('header.php'); ?>

    <h1>Contactez nous</h1>
    <form action="submit_contact.php" method="GET">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="message">Votre message</label>
            <textarea placeholder="Exprimez vous" name="message"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <br />

        <?php include_once('submit_contact.php');?>
    </div>

</body>
</html>
