/*
The `mock-setup.sql` file initializes everything needed for quick use, and uses
mock data as an example for demo purposes later on. Feel free to contribute :^)

All of this file's contents are meant to be run exactly once in PHPMyAdmin,
under the "mockdb" database.

See "query.php" for specifics related to the database connection.
*/

-- Table Deletion (Optional)

DROP TABLE IF EXISTS Item;
DROP TABLE IF EXISTS User;

-- Table Creation

CREATE TABLE Item (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  source VARCHAR(255) NOT NULL,
  department VARCHAR(255) NOT NULL,
  image_url VARCHAR(1000) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE User (
  id INT(11) NOT NULL AUTO_INCREMENT,
  login_id VARCHAR(255) NOT NULL,
  password VARCHAR(1000) NOT NULL,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  city_code VARCHAR(255) NOT NULL,
  is_admin BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
);

-- Mock Data Inserts

INSERT INTO Item (name, price, source, department, image_url) VALUES ('T-Shirt', 7.99, 'Canada', 'SHIRTS', 'https://renocountry.ca/wp-content/uploads/2021/09/tshirt-2.jpg');
INSERT INTO Item (name, price, source, department, image_url) VALUES ('Orange T-Shirt', 8.99, 'China', 'SHIRTS', 'https://mlnorthern.ca/wp-content/uploads/2018/05/vneck-tee-2.jpg');
INSERT INTO Item (name, price, source, department, image_url) VALUES ('Green Long Sleeve Shirt', 10.99, 'Switzerland', 'SHIRTS', 'https://renocountry.ca/wp-content/uploads/2021/09/long-sleeve-tee-2.jpg');
INSERT INTO Item (name, price, source, department, image_url) VALUES ('Red Beanie', 6.99, 'Switzerland', 'HATS', 'https://renocountry.ca/wp-content/uploads/2021/09/beanie-2.jpg');
INSERT INTO Item (name, price, source, department, image_url) VALUES ('Yellow Cap', 8.99, 'Canada', 'HATS', 'https://renocountry.ca/wp-content/uploads/2021/09/cap-2.jpg');
INSERT INTO Item (name, price, source, department, image_url) VALUES ('Sunglasses', 14.99, 'Germany', 'ACCESSORIES', 'https://renocountry.ca/wp-content/uploads/2021/09/sunglasses-2.jpg');

INSERT INTO User (login_id, password, name, email, address, phone, city_code, is_admin) VALUES ('AdminDoe', '123chicken123', 'John Doe', 'john.doe@clothscs.com', '1234 Street St', '6471112222', '647', 1);
INSERT INTO User (login_id, password, name, email, address, phone, city_code) VALUES ('UserDoe', '123chicken123', 'Jane Doe', 'jane.doe123@gmail.com', '4321 Avenue Av', '4162221111', '416');