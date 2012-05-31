<?php
include('MemcacheSASL.php');

$memcached = new MemcacheSASL;
$memcached->addServer('mc7.ec2.northscale.net', '11211');
$memcached->setSaslAuthData('username', 'password');

$key = 'test';
$value = '123';
$cache_time = 10;

// add key & value
var_dump($memcached->add($key, $value,$cache_time));

//delete by key
$memcached->delete($key);

// flush all
$memcached->flush();

# Example

if($memcached->get($key) != FALSE)
{
	echo $memcached->get($key);
}
else
{
	$memcached->add($key, $value,$cache_time);
	$value
}