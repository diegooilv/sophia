<?php
class RedisService
{
    private Redis $redis;
    public function __construct()
    {
        $this->redis = new Redis();
        $this->redis->connect('redis', 6379);
    }

    public function reqGroq($tokens)
    {
        $rpm = $this->redis->incr('rpm');
        if ($rpm === 1) {
            $this->redis->expire('rpm', 60);
        }

        $rpd = $this->redis->incr('rpd');
        if ($rpd === 1) {
            $this->redis->expire('rpd', 86400);
        }

        $tpm = $this->redis->incrBy('tpm', $tokens);
        if ($tpm === $tokens) {
            $this->redis->expire('tpm', 60);
        }

        $tpd = $this->redis->incrBy('tpd', $tokens);
        if ($tpd === $tokens) {
            $this->redis->expire('tpd', 86400);
        }
    }

    public function set($key, $value)
    {
        $this->redis->set($key, $value);
    }

    public function get($key)
    {
        return $this->redis->get($key) ?? 0;
    }

    public function del($key)
    {
        $this->redis->del($key);
    }
}