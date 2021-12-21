<?
include("Logical/Function.php");
$errors = array();
if (isset($_POST['login'], $_POST['password'], $_POST['confPassword'], $_POST['email']))
    $errors = Register($_POST['login'], $_POST['password'], $_POST['confPassword'], $_POST['email']);
for ($i = 0; $i < count($errors); $i++) {
    echo "<h4 style='color: red;'>$errors[$i]!</h4>";
}
?>
<form action="index.php?page=Registration" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Login</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="login">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" name="password">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput" name="confPassword">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email address:</label>
        <input type="email" class="form-control" id="formGroupExampleInput2" name="email">
    </div>
    <input type="submit" class="btn btn-primary" value="Sig Up">
</form>