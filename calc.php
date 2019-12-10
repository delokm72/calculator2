<?php
ini_set('display_errors', 1);

use Classes\nonStatic as Cn;

function autoloader1($item)
{
    $file = __DIR__ . "/classes/{$item}.php";
    $file2 = __DIR__ . "/interfaces/{$item}.php";
    if (file_exists($file))
    {
        echo '<b>autoloaded_classes: ' . $item . '</b><br>';
        require_once $file;
    }
    else if (file_exists($file2))
    {
        echo '<b>autoloaded_interfaces: ' . $item . '</b><br>';
        require_once $file2;
    }
    //else echo "Sorry, class: " . $item . " not found" . '</b><br>';
}
spl_autoload_register('autoloader1');

spl_autoload_register(function($class) {
    $file_name = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) require $file_name;
    else echo "new autoloader failed! with class: " . $file_name;
});

echo time() . "<br/>";
//$calc1 = new Calculator;
//echo StaticCalculator::add(2,3) . "<br/>";
//echo $calc1->divide(6,2) . "<br/>";

//require_once 'C:\xampp\htdocs\calculator2\classes\nonStatic\Calculator2.php';
//$calc2 = new Classes\nonStatic\Calculator2;
$calc2 = new Cn\Calculator2();
echo $calc2->divide(100,2) . "<br/>";
echo Classes\statics\StaticCalculator2::add(2,7) . "<br/>";
