<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'Atherys Horizons Full',
    'title' => 'Atherys Horizons (Full)',
    'version' => '2020-07-26-17-44-15',
    'priority' => 2,
    'location' => 'atherys-horizons-full.json',
);

$packages[] = array(
    'name' => 'AtherysLite',
    'title' => 'A$0therys Horizons (Lite)',
    'version' => '2020-07-26-17-41-13',
    'priority' => 1,
    'location' => 'atheryslite.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
