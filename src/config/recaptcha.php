<?php
class Recaptcha
{
    public static function captchaSecret()
    {
        return getenv('CAPTCHA_SECRET');
    }

    public static function captchaPublic()
    {
        return getenv('CAPTCHA_PUBLIC');
    }
}
