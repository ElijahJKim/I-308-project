CREATE TABLE book
(
    ID INT AUTO_INCREMENT,
    title VARCHAR(256) NOT NULL,
    price DECIMAL(6,2),
    PRIMARY KEY (ID)
)
ENGINE=INNODB;

INSERT INTO customer (ID, name, address, phone)
VALUES (501, 'Kate', '100 Once Twice Road', '(812) 123-4567'),
(502, 'Logan', '123 Laburnam Drive', '(555) 222-6666'),
(503, 'Dan', '2221 E. West Blvd', '(987) 654-3210');

CREATE TABLE publisher
(
    ID INT AUTO_INCREMENT, 
    name VARCHAR(50), 
    city VARCHAR(50), 
    PRIMARY KEY(ID)
)
ENGINE=INNODB;

INSERT INTO publisher (ID, name, city)
VALUES (300, 'Best Books', 'New York'),
(301, 'Penguin', 'Chicago'),
(302, 'IU Press', 'Bloomington');