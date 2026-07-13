<?php

function getPhilosophers()
{
    $philosophers = [];

    foreach (glob(__DIR__ . '/data/philosophers/*.json') as $file) {
        $data = json_decode(file_get_contents($file), true);

        if (is_array($data)) {
            $philosophers = [...$philosophers, ...$data];
        }
    }

    return $philosophers;
}