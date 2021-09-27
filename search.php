<?php

require_once(__DIR__ . "/CodeSearch.php");

$options = $argv;
$query = $options[1] ?? '';
$filename = $options[2] ?? '';

if (empty($query)) {
    print "Usage: php search.php \"org:myorg mysearchstring\" myfilename" . PHP_EOL;
    exit(1);
}

try {
    $CodeSearch = new CodeSearch($query, $filename);
    $CodeSearch->search();

} catch (\Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
