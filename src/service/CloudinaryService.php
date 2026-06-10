<?php

use Cloudinary\Cloudinary;

class CloudinaryService
{
    private Cloudinary $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => getenv('CLOUDINARY_CLOUD_NAME'),
                'api_key' => getenv('CLOUDINARY_API_KEY'),
                'api_secret' => getenv('CLOUDINARY_API_SECRET'),
            ]
        ]);
    }

    public function upload($tmpPath)
    {
        $result = $this->cloudinary->uploadApi()->upload($tmpPath, [
            'quality' => 'auto',
            'fetch_format' => 'auto',
        ]);
        return $result['secure_url'];
    }
}