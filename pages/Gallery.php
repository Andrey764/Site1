<?
$files = scandir('images');
echo "<ul>";
foreach ($files as $file) {
    if ($file != '.' && $file != '..')
        echo "<li>
    <img src='images/$file' alt='$file' width='550px' height='350px'>
    </li>";
}
echo "</ul>";
