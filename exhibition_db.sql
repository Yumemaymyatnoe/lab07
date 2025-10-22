CREATE DATABASE exhibition_db;
USE exhibition_db;

CREATE TABLE cars (
  car_id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  make VARCHAR (25) NOT NULL,
  model VARCHAR(40) NOT NULL,
  price FLOAT NOT NULL,
  yom INT NOT NULL
);

INSERT INTO cars (make, model, price, yom)
VALUES
('Holden', 'Astra', 14000, 2009),
('BMW', 'X3', 35000, 2010),
('Ford', 'Falcon', 39000, 2013),
('Toyota', 'Corolla', 20000, 2012),
('Holden', 'Commodore', 28000, 2009);