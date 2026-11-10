<?php

// Vercel entry point: forwards every request to Laravel's front controller.
// Laravel 8 on PHP 8.3 emits deprecation notices; keep them out of responses.
ini_set('display_errors', '0');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

require __DIR__ . '/../public/index.php';
