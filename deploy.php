<?php
namespace Deployer;

require 'recipe/laravel.php';

// Retrieve the server IP from the environment variable
$vpsIP = getenv('VPS_IP');

// Server configuration
host('production') // Name the host 'production'
    ->set('hostname', $vpsIP)  // Use the IP from environment variables
    ->set('remote_user', 'boy')
    ->set('port', 4000)
    ->set('deploy_path', '/home/boy/websites/portfolio');

// Define deployment tasks
task('startsite', function () {
    run('cd {{deploy_path}}/current && composer install && docker-compose up -d');
});

// Hooks
after('deploy:symlink', 'startsite'); // This runs after the code has been deployed
after('deploy:failed', 'deploy:unlock'); // Unlock on failure
after('deploy:success', 'deploy:unlock'); // Unlock on success
