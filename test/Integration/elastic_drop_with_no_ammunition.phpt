--TEST--
Elastic::drop() with no ammunition should throw an exception
--FILE--
<?php
require 'vendor/autoload.php';

use App\Elastic;
use App\Mesh;

// Sling components
$mesh = new Mesh;
$elastic = new Elastic($mesh);

try {
    $elastic->drop();
} catch (\Exception $exception) {
    echo $exception->getMessage();
}
?>
--EXPECTF--
No ammunition
