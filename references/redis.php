<?php
# https://github.com/phpredis/phpredis#api-documentation

# dockerfile: pecl install redis \ && docker-php-ext-enable redis

$redis = new Redis();

$redis->connect('redis', 6379);

$redis->set('user', 'marco');
$redis->get('user'); // marco

$redis->incr('key1'); # 1
$redis->incr('key1'); # 2

$redis->expire('key1', 3); # 3s

$redis->del('user'); # delete
