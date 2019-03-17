<?php

require __DIR__ . '/vendor/autoload.php';

use App\Sling;
use App\Elastic;
use App\Fork;
use App\Mesh;
use App\Ammunitions\Factory as AmmunitionFactory;
use App\Targets\Factory as TargetFactory;

// Sling components
$mesh = new Mesh;
$elastic = new Elastic($mesh);
$fork = new Fork($elastic);
$sling = new Sling($fork);

// Some middlewares and controllers rules
try {
    $ammunition = (new AmmunitionFactory)->make($_POST['ammunition'] ?? '');
    $target = (new TargetFactory)->make($_POST['target'] ?? '');
} catch (\InvalidArgumentException $exception) {
    header("HTTP/1.1 422");
    echo json_encode([
        'status' => 422,
        'code' => 'UnprocessableEntityError',
        'message' => $exception->getMessage()
    ]);
    exit;
}

// Shooting
header("HTTP/1.1 200");
echo json_encode(['data' => ['action' => $sling->shot($ammunition, $target)]]);
