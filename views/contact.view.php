<!doctype html>
<html lang="en">
<?php require 'partials/head.php'; ?>
<body>
    <h1><?= $contact ?></h1>
    <?php require 'partials/nav.php'; ?>
    <p>Contact me:</p>
    <form action="/contact/send" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
