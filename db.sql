CREATE DATABASE blog_db;
 USE blog_db;
 CREATE TABLE posts ( id INT AUTO_INCREMENT PRIMARY KEY, author VARCHAR(255) NOT NULL, content TEXT NOT NULL, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP );
