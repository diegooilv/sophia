-- --------------------------------------------------------
-- Sophia – Database Init
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS sophia CHARACTER
SET
    utf8mb4 COLLATE utf8mb4_unicode_ci;

USE sophia;

-- --------------------------------------------------------
-- Tables
-- --------------------------------------------------------
CREATE TABLE
    User (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        username VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(150) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        bio TEXT,
        avatar VARCHAR(500),
        role ENUM ('user', 'admin') NOT NULL DEFAULT 'user',
        active BOOLEAN NOT NULL DEFAULT TRUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT NULL
    );

CREATE TABLE
    SessionToken (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        token VARCHAR(255) NOT NULL,
        expires_at TIMESTAMP NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES User (id) ON DELETE CASCADE
    );

CREATE TABLE
    ResetToken (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        token VARCHAR(255) NOT NULL,
        expires_at TIMESTAMP NOT NULL,
        used BOOLEAN NOT NULL DEFAULT FALSE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES User (id) ON DELETE CASCADE
    );

CREATE TABLE
    Category (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL UNIQUE
    );

CREATE TABLE
    Preference (
        user_id INT UNSIGNED NOT NULL,
        category_id INT UNSIGNED NOT NULL,
        PRIMARY KEY (user_id, category_id),
        FOREIGN KEY (user_id) REFERENCES User (id) ON DELETE CASCADE,
        FOREIGN KEY (category_id) REFERENCES Category (id) ON DELETE CASCADE
    );

CREATE TABLE
    Post (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        body TEXT NOT NULL,
        image VARCHAR(500),
        reading_time TINYINT UNSIGNED,
        status ENUM ('published', 'archived') NOT NULL DEFAULT 'published',
        author_id INT UNSIGNED NOT NULL,
        category_id INT UNSIGNED NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT NULL,
        FOREIGN KEY (author_id) REFERENCES User (id) ON DELETE CASCADE,
        FOREIGN KEY (category_id) REFERENCES Category (id) ON DELETE RESTRICT
    );

CREATE TABLE
    Material (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        image VARCHAR(500),
        type ENUM ('pdf', 'link', 'book') NOT NULL,
        url VARCHAR(500),
        author_id INT UNSIGNED NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT NULL,
        FOREIGN KEY (author_id) REFERENCES User (id) ON DELETE CASCADE
    );

-- --------------------------------------------------------
-- Seed – Admin
-- --------------------------------------------------------
-- password: admin1234 (bcrypt) 
INSERT INTO
    User (name, username, email, password_hash, role)
VALUES
    (
        'Diego',
        'diegooilv',
        'diegooilv@sophia.filosofia',
        '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'admin'
    );

-- Será alterado no futuro.