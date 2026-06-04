<?php

return [
    'host' => getenv('MAIL_HOST'),
    'port' => (int) getenv('MAIL_PORT'),
    'username' => getenv('MAIL_USER'),
    'password' => getenv('MAIL_PASS'),
    'from_email' => getenv('MAIL_FROM'),
    'from_name' => getenv('MAIL_FROM_NAME'),
];