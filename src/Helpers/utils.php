<?php

function env(string $variable, $default = null)
{
    return $_ENV[$variable] ?? $default;
}

function uuid(): string
{
    /*
     * UUID Generated using the following articles
     *
     * https://www.uuidgenerator.net/dev-corner/php
     * https://www.rfc-editor.org/rfc/rfc4122#section-4.4
     */
    
    $data = random_bytes(16);
    
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}