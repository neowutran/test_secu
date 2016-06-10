<?php 
echo "test4";
print_r(get_defined_vars());
$homepage = file_get_contents('index.php');
echo $homepage.'printed';
echo getcwd();
print_r(scandir("./"));
