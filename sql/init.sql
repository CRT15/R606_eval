CREATE TABLE IF NOT EXISTS db_table (
    id INT PRIMARY KEY AUTO_INCREMENT,
    text VARCHAR(100) NOT NULL
);

INSERT INTO db_table (text) VALUES ('azerty');
INSERT INTO db_table (text) VALUES ('abcdef');
INSERT INTO db_table (text) VALUES ('xyz');
INSERT INTO db_table (text) VALUES ('123456789');