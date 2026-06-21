<?php

class RateLimitService
{
    private RedisService $redis;

    private const MAX_REQUESTS = 30;
    private const WINDOW_SECONDS = 60;

    public function __construct()
    {
        $this->redis = new RedisService();
    }

    public function check()
    {
        if (($_SESSION['auth']['role'] ?? null) === 'admin') {
            return;
        }

        $id = $_SESSION['auth']['id'] ?? $this->getIP();

        $window = intdiv(time(), self::WINDOW_SECONDS);
        $key = "reqs:{$id}:{$window}";

        $reqs = $this->redis->setReq($key, self::WINDOW_SECONDS + 5);

        if ($reqs > self::MAX_REQUESTS) {
            $retryAfter = self::WINDOW_SECONDS - (time() % self::WINDOW_SECONDS);

            http_response_code(429);
            header("Retry-After: {$retryAfter}");
            exit;
        }
    }

    private function getIP()
    {
        if (!empty($_SERVER['HTTP_X_REAL_IP'])) {
            return $_SERVER['HTTP_X_REAL_IP'];
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
        }

        return $_SERVER['REMOTE_ADDR'];
    }
}