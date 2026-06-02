<?php
// title, type, author_id
// description, image, url

class MaterialModel
{
    public function __construct(
        private $id,
        private $title,
        private $author_id,
        private $description,
        private $imageUrl,
        private $url
    ) {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function getUrl()
    {
        return $this->url;
    }
}