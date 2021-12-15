<?php
$login = $_POST["login"];
setcookie('login', $login);
?>
<p> Your login from last cookie: </p>
<?php
if (isset($_COOKIE['login'])) {
    echo $_COOKIE['login'];
}
?>
<a rel="script" href="show.php"> go to next page </a>

