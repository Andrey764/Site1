<?
include_once("Logical/Function.php");
if (isset($_POST['ETSlogin'], $_POST['ETSpassword']))
    if (!UniqueUser($_POST['ETSlogin'], $_POST['ETSpassword'])) {
        echo "<div>Вход выполнен</div>";
        setcookie("Registered_Login", $_POST['ETSlogin'], time() + 60 * 60 * 24, "/", "", 0);
        setcookie('Registered_password', $_POST['ETSpassword'], time() + 60 * 60 * 24, "/", "", 0);
    } else
        echo "<div>Ошибка логин или пароль не верный</div>";
?>
<form action="index.php" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Login</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="ETSlogin">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" name="ETSpassword">
    </div>
    <input type="submit" class="btn btn-primary" value="Sig In">
</form>