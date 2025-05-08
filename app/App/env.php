<?php
function env($key, $default = null)
{
    $lines = file(__DIR__ . '/../../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // abaikan komentar
        list($envKey, $envValue) = explode('=', $line, 2);
        if (trim($envKey) === $key) {
            return trim($envValue);
        }
    }
    return $default;
}
