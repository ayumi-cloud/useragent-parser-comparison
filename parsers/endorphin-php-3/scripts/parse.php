<?php

declare(strict_types = 1);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '-1');

$benchmarkPos = array_search('--benchmark', $argv);
$benchmark    = false;

if ($benchmarkPos !== false) {
    $benchmark = true;
    unset($argv[$benchmarkPos]);
    $argv = array_values($argv);
}

$agentListFile = $argv[1];

$results   = [];
$parseTime = 0;

$start = microtime(true);
require_once __DIR__ . '/../vendor/autoload.php';

use EndorphinStudio\Detector\Detector;

Detector::analyse('Test String');
$initTime = microtime(true) - $start;

$file = new SplFileObject($agentListFile);
$file->setFlags(SplFileObject::DROP_NEW_LINE);

while (!$file->eof()) {
    $agentString = $file->fgets();

    if (empty($agentString)) {
        continue;
    }

    $start = microtime(true);
    $r     = Detector::analyse($agentString);
    $end   = microtime(true) - $start;

    $parseTime += $end;

    if ($benchmark) {
        continue;
    }

    $results[] = [
        'useragent' => $agentString,
        'parsed'    => [
            'browser' => [
                'name'    => $r->isBot ? (isset($r->Robot) ? $r->Robot->getName() : null) : (isset($r->Browser) ? $r->Browser->getName() : null),
                'version' => isset($r->Browser) ? $r->Browser->getVersion() : null,
            ],
            'platform' => [
                'name'    => isset($r->OS) ? $r->OS->getName() : null,
                'version' => isset($r->OS) ? $r->OS->getVersion() : null,
            ],
            'device' => [
                'name'     => isset($r->Device) ? $r->Device->getName() : null,
                'brand'    => null,
                'type'     => isset($r->Device) ? $r->Device->getType() : null,
                'ismobile' => $r->isMobile ? true : false,
            ],
        ],
        'time' => $end,
    ];
}

$file   = null;
$memory = memory_get_peak_usage();

// Get version from composer
$package = new \PackageInfo\Package('endorphin-studio/browser-detector');

echo (new \JsonClass\Json())->encode([
    'results'     => $results,
    'parse_time'  => $parseTime,
    'init_time'   => $initTime,
    'memory_used' => $memory,
    'version'     => $package->getVersion(),
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
