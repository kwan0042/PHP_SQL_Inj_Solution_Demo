CREATE DATABASE WSB;

-- Use the new database
USE WSB;

-- Create a new table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    telephone VARCHAR(20) NOT NULL
);