<?
include_once("Logical/User.php");
function Register($login, $password, $confPassword, $email)
{
    $errors = array();
    CorrectLoggin($errors, $login);
    CorrectPassword($errors, $password, $confPassword);
    if (count($errors) == 0) {
        array_push($errors, 'user added successfully');
        $user = new User($login, $password, $email);
        $user->Save("Logical/Users.txt");
        echo $errors[0];
    }
    return $errors;
}

function CorrectPassword(&$errors, $password, $confPassword)
{
    $lengthPassword = strlen($password);
    if ($password != $confPassword)
        array_push($errors, "Password not confirmed");
    if ($lengthPassword < 3)
        array_push($errors, "Password is too short");
    if ($lengthPassword > 30)
        array_push($errors, "Password is too long");
}

function CorrectLoggin(&$errors, $login)
{
    $lengthlogin = strlen($login);
    if (!UniqueUser($login))
        array_push($errors, "Login already taken");
    if ($lengthlogin < 3)
        array_push($errors, "Login is too short");
    if ($lengthlogin > 30)
        array_push($errors, "Login is too long");
}

function UniqueUser($login, $password = null)
{
    $users = GetUsers("Logical/Users.txt");
    for ($i = 0; $i < count($users); $i++) {
        $user = explode('|', $users[$i], 3);

        if ($password == null && $user[0] == $login)
            return false;
        if ($password != null)
            if ($user[0] == $login && $user[1] == $password)
                return false;
            else
                return true;
    }
    return true;
}

function GetUsers($path)
{
    $fd = fopen($path, 'r') or die("не удалось открыть файл");
    $users = array();
    while (!feof($fd)) {
        array_push($users, fgets($fd));
    }
    fclose($fd);
    return $users;
}
