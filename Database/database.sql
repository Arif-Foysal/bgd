-- Create the database if it does not exist
CREATE DATABASE IF NOT EXISTS politics;
USE politics;

-- Table to store main policy categories (e.g., Governance, Economy, Law, etc.)
CREATE TABLE IF NOT EXISTS policy_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    -- name VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    description_bangla TEXT
);

-- Table to store policy topics under each category (e.g., Judicial Independence under Law)
CREATE TABLE IF NOT EXISTS policy_topics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    -- name VARCHAR(255) NOT NULL,
    description TEXT,
    description_bangla TEXT,
    FOREIGN KEY (category_id) REFERENCES policy_categories(id) ON DELETE CASCADE
);

-- Table to store essays or detailed descriptions related to policies
CREATE TABLE IF NOT EXISTS policy_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    topic_id INT NOT NULL,
    content TEXT NOT NULL,
    content_bangla TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (topic_id) REFERENCES policy_topics(id) ON DELETE CASCADE
);

-- Table to store members or users of the political party website
CREATE TABLE IF NOT EXISTS members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('Admin', 'Member', 'Guest') DEFAULT 'Member',
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table to store campaign events
CREATE TABLE IF NOT EXISTS campaigns (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    description_bangla TEXT,
    event_date DATETIME NOT NULL,
    location VARCHAR(255)
);

