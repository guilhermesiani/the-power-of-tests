--TEST--
Sling::shot() should print output about ammunition used and target hit
--FILE--
<?php
require 'vendor/autoload.php';

use App\Sling;
use App\Elastic;
use App\Fork;
use App\Mesh;
use App\Ammunitions\Stone;
use App\Targets\Bird;

// Sling components
$mesh = new Mesh;
$elastic = new Elastic($mesh);
$fork = new Fork($elastic);
$sling = new Sling($fork);

// Inputs to be used by Sling
$stone = new Stone;
$bird = new Bird;

// Testing shot
echo $sling->shot(new Stone, new Bird);
?>
--EXPECT--
Launched a Stone on a Bird
