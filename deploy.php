<?php
namespace Deployer;

require 'recipe/laravel.php';

// Retrieve the server IP and password from environment variables
$vpsIP = getenv('VPS_IP');
$vpsPassword = getenv('VPS_PASSWORD');

// Server configuration
host('production')
    ->set('hostname', $vpsIP)  // Use the IP from environment variables
    ->set('remote_user', 'boy')
    ->set('port', 4000)
    ->set('deploy_path', '/home/boy/websites/portfolio')
    ->set('password', $vpsPassword)  // Use password-based authentication
    ->set('identityFile', false);  // Disable using SSH keys

// Define deployment tasks
task('startsite', function () {
    run('cd {{deploy_path}}/current && composer install && docker-compose up -d');
});

// Hooks
after('deploy:symlink', 'startsite'); // Run after code is deployed
after('deploy:failed', 'deploy:unlock'); // Unlock on failure
after('deploy:success', 'deploy:unlock'); // Unlock on success
