
<?php
$path = $_GET['path'] ? : __DIR__;
$dir = new DirectoryIterator($path);
foreach ($dir as $item) {
    if (!$item->isDir()) {
        echo $item->getFilename() . PHP_EOL.'<br>';
    }else {
        echo "<a href='./dir.php?path=$dir'>$item</a>" . PHP_EOL.'<br>';
    }
}