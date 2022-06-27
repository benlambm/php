CREATE TABLE Comment (
 CommentID int NOT NULL AUTO_INCREMENT,
 Name varchar(255),
 Title varchar(255),
 Comments varchar(500),
 CommentDate timestamp DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY(CommentID)
);
CREATE TABLE Users (
  UserID int NOT NULL AUTO_INCREMENT,
  FirstName varchar(50),
  LastName varchar(50),
  Username varchar(50),
  Password varchar(50),
  LastLoginTime timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(UserID)
);
CREATE TABLE Product (
    ProductID int NOT NULL AUTO_INCREMENT,
    ProductName varchar(255) NOT NULL,
    ProductDescription varchar(255),
    ProductQuantity int NOT NULL,
    ProductPrice decimal(5,2),
    ProductImage varchar(255),
    PRIMARY KEY(ProductID)
);
INSERT INTO Product VALUES
(NULL, 'Colorful Hat', 'I Love Luray baseball hat (tan & black)', 20, 19.99, '../images/hat.webp');
INSERT INTO Product VALUES
(NULL, 'Colorful T-Shirt', 'I Love Luray T-Shirt with black background', 15, 15.99, '../images/shirt.webp');
INSERT INTO Product VALUES
(NULL, 'Fishing T-Shirt', 'Fishing Fans T-Shirt that says I Caught Mine On The Shenandoah River', 15, 15.99, '../images/fish.webp');
INSERT INTO Product VALUES
(NULL, 'Blue T-Shirt', 'Luray T-Shirt with blue background', 15, 15.99, '../images/blue.webp');
INSERT INTO Product VALUES
(NULL, 'Red T-Shirt', 'Luray T-Shirt with red background', 15, 15.99, '../images/red.webp');
INSERT INTO Product VALUES
(NULL, 'Green T-Shirt', 'Luray T-Shirt with greem background', 15, 15.99, '../images/green.jpg');
INSERT INTO Product VALUES
(NULL, 'Snowman Picture', 'Picture of Snowman by Local Artist', 1, 599.90, '../images/snowman.webp');
INSERT INTO Product VALUES
(NULL, 'Cat T-Shirt', 'Blue T-Shirt that says Can You Hear Me Meow?', 15, 15.99, '../images/cat.webp');
INSERT INTO Product VALUES
(NULL, 'Another Hat', 'Spring-themed Baseball hat', 21, 21.99, '../images/spring.webp');
INSERT INTO Product VALUES
(NULL, 'Bumper Sticker', 'Stickers for Remote Working Professionals', 104, 1.00, '../images/sticker.webp');

INSERT INTO Users VALUES
(NULL, 'Ben', 'Lamb', 'admin', 'admin', NULL);
INSERT INTO Users VALUES
(NULL, 'Alice', 'Thompson', 'publisher', 'publisher', NULL);
INSERT INTO Users VALUES
(NULL, 'Bob', 'Jones', 'customer', 'customer', NULL);
