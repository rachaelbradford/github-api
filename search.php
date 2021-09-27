<?php

require_once(__DIR__ . "/CodeSearch.php");

$options = $argv;
$query = $options[1] ?? '';

if (empty($query)) {
    print "Usage: php search.php \"org:myorg mysearchstring\"" . PHP_EOL;
    exit(1);
}

try {
    $CodeSearch = new CodeSearch($query);
    $CodeSearch->search();

} catch (\Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
