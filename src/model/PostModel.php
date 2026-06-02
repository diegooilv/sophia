<?php
// title, body, author_id, category_id
// image, reading_time, status

class PostModel
{
    public function __construct(
        private $id,
        private $userId,
        private $categoryId,
        private $title,
        private $description,
        private $banner,
        private $links
    ) {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getBanner()
    {
        return $this->banner;
    }

    public function getLinks()
    {
        return $this->links;
    }
}