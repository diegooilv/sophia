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
                'api_key'    => getenv('CLOUDINARY_API_KEY'),
                'api_secret' => getenv('CLOUDINARY_API_SECRET'),
            ]
        ]);
    }

    public function upload(string $tmpPath): string
    {
        $result = $this->cloudinary->uploadApi()->upload($tmpPath);
        return $result['secure_url'];
    }
}