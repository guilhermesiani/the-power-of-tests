--TEST--
Elastic::drop() after stretch some Ammunition should drop with success
--FILE--
<?php
require 'vendor/autoload.php';

use App\Elastic;
use App\Mesh;
use App\Ammunitions\Stone;

// Sling components
$mesh = new Mesh;
$elastic = new Elastic($mesh);

$elastic->stretch(new Stone);
echo $elastic->drop();
?>
--EXPECT--
Launched a Stone
