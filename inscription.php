<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include_once ('nav.php'); ?>
    <div class="container">
          <form>
            <h2>Inscription</h2>
            <div class="input-group">
              <label>Nom</label>
              <input type="text" name="nom" required>
            </div>
            <div class="input-group">
              <label>Adresse email</label>
              <input type="email" name="email" required>
            </div>
            <div class="input-group">
              <label>Mot de passe</label>
              <input type="password" name="password" required>
            </div>
            <div class="input-group">
              <button type="submit" class="btn">S'inscrire</button>
            </div>
            <p>Vous avez déjà un compte? <a href="login.html">Connectez-vous</a></p>
          </form>
        </div>
</body>
</html>