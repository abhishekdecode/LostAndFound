<?php
require 'vendor/autoload.php'; // Load Cloudinary SDK

use Cloudinary\Cloudinary;

$cloudinary = new Cloudinary([
    'cloud' => [
        'cloud_name' => 'your-cloud-name',
        'api_key'    => 'your-api-key',
        'api_secret' => 'your-api-secret',
    ],
]);
?>
