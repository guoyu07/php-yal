--TEST--
Check for Yal\Acl\Acl::hasResource(Resource\ResourceInterface|string $resource)
--SKIPIF--
<?php if (!extension_loaded("yal")) print "skip"; ?>
--FILE--
<?php
namespace Yal\Acl;

$acl = new Acl();
$resourceArea = new Resource\GenericResource('area');
$acl->addResource($resourceArea);
var_dump($acl->hasResource($resourceArea));    //bool(true)
?>
--EXPECTF--
bool(true)
