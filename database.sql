CREATE TABLE levels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    creator VARCHAR(255) NOT NULL,
    icon_url VARCHAR(255) DEFAULT 'icon.png',
    position INT UNIQUE
);

CREATE TABLE records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    level_id INT,
    player_name VARCHAR(255),
    video_link VARCHAR(255),
    status ENUM('pending', 'approved') DEFAULT 'pending',
    FOREIGN KEY (level_id) REFERENCES levels(id)
);