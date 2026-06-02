<?php
// name, username, email, password_hash, bio, image_url,
// role, active

class UserModel
{
    public function __construct(
        private $id,
        private $name,
        private $username,
        private $email,
        private $passwordHash,
        private $bio,
        private $imageUrl,
        private $role,
        private $active = true,
    ) {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function isActive()
    {
        return $this->active;
    }
}