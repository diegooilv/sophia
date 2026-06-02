<?php

class MaterialViewModel
{
    public function __construct(
        private MaterialModel $material,
        private UserModel $author,
    ) {
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getauthor()
    {
        return $this->author;
    }
}