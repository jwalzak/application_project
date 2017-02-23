<?php
session_start();
require_once('character.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['backstory'])){
    $SESSION['f_name'] = $_POST['f_name'];
    $SESSION['l_name'] = $_POST['l_name'];
    $SESSION['backstory'] = $POST['backstory'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hero Burger</title>
</head>
<body>
    <div id="main">
    <header>
        <h1>Hero Burger</h1>
    </header>
    <main>
        <p>Welcome to HERO BURGER the premiere RPG character creation site online.</p>
        <aside>
            <h2>Let's get started</h2>
            <form action="">
                <p>Let's get some peliminary information out of the way:</p>
                <p>Fist Name:</p>
                <input type="text" name="f_name">
                <p>Last Name:</p>
                <input type="text" name="l_name">
                <p>Character Backstory</p>
                <textarea rows="4" cols="50" name="backstory"></textarea>
                <input type="submit">
            </form>
        </aside>
    </main>
    </div>
</body>
</html>
