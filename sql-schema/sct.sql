-- Table for storing chat messages
CREATE TABLE messages (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  message_text TEXT NOT NULL,
  message_type TEXT,
  sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);