CREATE DATABASE Atharvhubagreement;
USE Atharvhubagreement;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Inserting your specific credentials (hashed for security)
INSERT INTO users (username, password) 
VALUES ('AtharvHub', '$2y$10$DYI2d/EMBV1yqyyjozFZjeUbLQ4b2aF6Cyef4DIdEBqFOhoGgvuZm'); 
-- Note: The password 'Ath@rv' should be verified using password_verify() in PHP.


CREATE TABLE agreements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    verification_no VARCHAR(20),
    client_name VARCHAR(255) NOT NULL,
    client_mobile VARCHAR(20) NOT NULL,
    agreement_type VARCHAR(50) NOT NULL,
    clauses TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



