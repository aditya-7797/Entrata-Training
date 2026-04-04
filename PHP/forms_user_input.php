

<form method="POST" action="forms_user_input.php">
    Name:
    <input type="text" name="username">

    <input type="submit" value="Submit">
</form>

<?php

$name = $_POST["username"];

echo "Hello " . $name;

?>