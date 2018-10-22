CREATE DATABASE shop;

CREATE TABLE products (
  PRODUCT_ID INT(11) NOT NULL AUTO_INCREMENT,
  PRODUCT_NAME VARCHAR (255) NOT NULL,
  COLOR VARCHAR(255),
  PRICE DECIMAL (6,2) DEFAULT 0,
  CAT_ID INT(11),
  DESCRIPTION TEXT,
  CREATE_DATE DATETIME DEFAULT CURRENT_TIMESTAMP,
  LAST_UPDATE DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (PRODUCT_ID),
  CONSTRAINT 'FK1' FOREIGN KEY (CAT_ID) REFERENCES categories(CAT_ID)
);

CREATE TABLE categories (
  CAT_ID INT(11) NOT NULL AUTO_INCREMENT,
  CAT_NAME VARCHAR(255) NOT NULL,
  CREATE_DATE DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (CAT_ID)
);

INSERT INTO categories (CAT_ID, CAT_NAME)
  VALUES  (1, 'Връхни дрехи'),
    (2, 'Блузи'),
    (3, 'Пуловери'),
    (4, 'Рокли')
;

INSERT INTO products (PRODUCT_NAME, PRICE, COLOR, CAT_ID, DESCRIPTION) VALUES
  ('Грейка с цип на гърба', 11, 'многоцветна', 1, 'С цип и халка на гърба'),
  ('Блузка Обичам мама', 5, 'розова', 2, 'Тънка пролетна блузка с принт'),
  ('Блузка Обичам мама', 5, 'синя', 2, 'Тънка пролетна блузка с принт')
;