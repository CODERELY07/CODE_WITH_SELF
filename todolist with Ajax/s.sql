-- Create database
CREATE TABLE todolist(
    id INT NOT NULL AUTO_INCREMENT,
    list VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)

-- INSERT VALUES
INSERT INTO todolist (list) VALUES
('do dishes'),
('clean room'),
('buy groceries'),
('finish homework');
