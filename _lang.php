<?php 
echo "test4";
echo "======\n";
print_r(get_defined_vars());
echo "=======\n";
$homepage = file_get_contents('index.php');
echo "======\n";
var_dump($homepage);
echo htmlentities($homepage);
echo "=======\n";
echo getcwd();
echo "======\n";
print_r(scandir("./"));
echo "======\n";
