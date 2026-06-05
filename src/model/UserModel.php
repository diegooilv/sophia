<?php
// name, username, email, password_hash, bio, image_url,
// role, active

class UserModel
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    public function create($name, $username, $email, $password_hash, $bio, $image_url)
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO users (name, username, email, password_hash, bio, image_url) VALUES (?,?,?,?,?,?)'
        );

        $stmt->execute([
            $name,
            $username,
            $email,
            $password_hash,
            $bio,
            $image_url
        ]);

        return $this->pdo->lastInsertId();
    }

    public function findByEmail($email)
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM User WHERE email = ?'
        );

        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByUsername($username)
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM User WHERE username = ?'
        );

        $stmt->execute([$username]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM User WHERE id = ?'
        );

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data)
    {
        $fields = [];
        $values = [];

        foreach ($data as $column => $value) {
            $fields[] = "{$column} = ?";
            $values[] = $value;
        }

        $values[] = $id;

        $sql = "UPDATE User SET " . implode(', ', $fields) . " WHERE id = ?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute($values);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM users WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->rowCount() > 0;
    }

    public function toggleActive($id, $active)
    {
        if ($active) {
            $stmt = $this->pdo->prepare(
                'UPDATE User
             SET active = ?, deleted_at = NULL
             WHERE id = ?'
            );

            $stmt->execute([true, $id]);
        } else {
            $stmt = $this->pdo->prepare(
                'UPDATE User
             SET active = ?, deleted_at = NOW()
             WHERE id = ?'
            );

            $stmt->execute([false, $id]);
        }

        return $stmt->rowCount() > 0;
    }

    public function toggleAdm($id, $boolean)
    {
        $stmt = $this->pdo->prepare('UPDATE User SET role = ? WHERE id = ?');
        if ($boolean) {
            $stmt->execute(['admin', $id]);
        } else {
            $stmt->execute(['user', $id]);
        }

        return $stmt->rowCount() > 0;
    }
}