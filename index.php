<?php

require 'userValidator.php';

if (isset($_POST['submit'])){
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();
}


?>

<html lang="en">
<head>
    <title>PHP OOP</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="new-user">
    <h2>Create a new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <label>username: </label>
        <input type="text" name="username" value="<?= htmlspecialchars($_POST['username']) ?? '' ?>">
        <div class="error">
            <?= $errors['username'] ?? ''; ?>
        </div>

        <label>email: </label>
        <input type="text" name="email" value="<?= htmlspecialchars($_POST['email']) ?? '' ?>">
        <div class="error">
            <?= $errors['email'] ?? ''; ?>
        </div>

        <input type="submit" value="submit" name="submit">

    </form>
</div>

</body>
</html>
