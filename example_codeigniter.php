<?php

# Example for Codeigniter
#
# Copy MemcacheSASL.php to application/libraries/

$this->load->library('MemcacheSASL','','memcached');
$this->memcachedd->addServer('mc1.ec2.memcachier.com', '11211');
$this->memcachedd->setSaslAuthData('username', 'password');

$key = 'test';
$value = '123';
$cache_time = 10;

// add key & value
var_dump($this->memcached->add($key, $value,$cache_time));

//delete by key
$this->memcached->delete($key);

// flush all
$this->memcached->flush();

# Example

if($this->memcached->get($key) != FALSE)
{
	echo $this->memcached->get($key);
}
else
{
	$this->memcached->add($key, $value,$cache_time);
	$value
}