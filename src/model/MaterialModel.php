<?php
// title, type, author_id
// description, image, ur
// category_id

class MaterialModel
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    public function create($title, $description, $imageUrl, $type, $url, $authorId, $categoryId = 1)
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO materials (title, description, image, type, url, author_id, category_id)
            VALUES (?, ?, ?, ?, ?, ?, ?)'
        );

        $stmt->execute([
            $title,
            $description,
            $imageUrl,
            $type,
            $url,
            $authorId,
            $categoryId
        ]);

        return $this->pdo->lastInsertId();
    }

    public function findByAuthor($authorId)
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM materials WHERE author_id = ?'
        );
        $stmt->execute([
            $authorId
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM materials WHERE id = ?'
        );
        $stmt->execute([
            $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByType($type)
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM materials WHERE type = ?'
        );
        $stmt->execute([
            $type
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($query)
    {
        $search = "%{$query}%";

        $stmt = $this->pdo->prepare(
            'SELECT *
         FROM materials
         WHERE title LIKE ?
            OR description LIKE ?'
        );

        $stmt->execute([
            $search,
            $search
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function edit($id, array $data)
    {
        $allowed = [
            'title',
            'description',
            'image',
            'url',
            'category_id'
        ];

        $fields = [];
        $values = [];

        foreach ($data as $column => $value) {
            if (!in_array($column, $allowed, true)) {
                continue;
            }

            $fields[] = "{$column} = ?";
            $values[] = $value;
        }

        if (empty($fields)) {
            return false;
        }

        $values[] = $id;

        $sql = sprintf(
            'UPDATE materials SET %s WHERE id = ?',
            implode(', ', $fields)
        );

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute($values);
    }
}