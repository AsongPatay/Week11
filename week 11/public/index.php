<?php

function esc($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function site_url($path = '')
{
    return '/' . ltrim($path, '/');
}

function old($key, $default = '')
{
    return $_POST[$key] ?? $default;
}

function csrf_field()
{
    return '<input type="hidden" name="csrf_test_name" value="' . esc($_SERVER['REQUEST_TIME']) . '">';
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$user_input = null;

if ($path === '/securitylab/submit' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_input = filter_input(INPUT_POST, 'user_input', FILTER_UNSAFE_RAW);
}

require __DIR__ . '/../app/Views/form.php';
