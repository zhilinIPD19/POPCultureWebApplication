Create DATABASE IF NOT EXISTS popcultureDB;
USE popcultureDB;
CREATE TABLE IF NOT EXISTS categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100) NOT Null,
    created DATETIME, modified DATETIME);

 CREATE TABLE IF NOT EXISTS flavours(
    id INT AUTO_INCREMENT PRIMARY KEY,
    flavour VARCHAR(100) NOT Null,
    created DATETIME, modified DATETIME);

CREATE TABLE IF NOT EXISTS popsicles(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT Null, 
    description VARCHAR(100) NOT NULL, 
    ingredient VARCHAR(100) NOT NULL,
    price DECIMAL(18,2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    calorie INT(11) NOT NULL,
    latest BOOLEAN NOT NULL,
    flavour_id INT(50) NOT NULL, 
    created DATETIME, modified DATETIME, 
    FOREIGN KEY flavour_key (flavour_id) REFERENCES flavours(id), 
    FOREIGN KEY category_key (category_id) REFERENCES categories(id));
 
CREATE TABLE IF NOT EXISTS messages(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL, 
    email VARCHAR(100) NOT NULL,
    phoneNumber VARCHAR(12) NOT NULL, 
    message VARCHAR(100) NOT NULL,   
    created DATETIME, modified DATETIME);

CREATE TABLE popsicles_categories ( 
 popsicle_id INT NOT NULL, 
 category_id INT NOT NULL, 
 PRIMARY KEY (popsicle_id, category_id), 
 FOREIGN KEY popsicles_key(popsicle_id) REFERENCES popsicles(id), 
 FOREIGN KEY categorys_key(category_id) REFERENCES categorys(id)
);
