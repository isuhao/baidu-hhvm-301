<?php
$redis = new Redis();
$res = $redis->connect('10.26.225.16','6379');
$res = $redis->mget(array());
var_dump($res);
$res = $redis->mget(array('test'));
var_dump($res);
