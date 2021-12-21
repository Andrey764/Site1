<?
class User
{
    private $login;
    private $password;
    private $email;
    function __construct($login, $password, $email)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
    }

    function Save($path)
    {
        $fd = fopen($path, 'a') or die("не удалось создать файл");
        fwrite($fd, "$this->login|$this->password|$this->email\n");
        fclose($fd);
    }

    function Show()
    {
        echo "<div>Login: $this->login</div>";
        echo "<div>Password: $this->password</div>";
        echo "<div>Email: $this->email</div>";
    }
}
