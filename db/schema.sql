CREATE TABLE cats (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR (255) NOT NULL ,
  `created_at` DATETIME NOT NULL DEFAULT NOW(),

  PRIMARY KEY(`id`)
)ENGINE=InnoDB;


CREATE TABLE products (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR (255) NOT NULL ,
  `desc` TEXT NOT NULL ,
  `price` DECIMAL(8,2) NOT NULL ,
  `piecec_no` SMALLINT NOT NULL ,
  `img` VARCHAR (255) NOT NULL ,
  `cats_id` INT UNSIGNED ,
  `created_at` DATETIME NOT NULL DEFAULT NOW(),

  PRIMARY KEY(`id`),
  FOREIGN KEY(cats_id) REFERENCES cats(id) ON DELETE SET NULL
)ENGINE=InnoDB;

CREATE TABLE orders (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR (255) NOT NULL ,
  `email` VARCHAR (255),
  `phone` VARCHAR (255) NOT NULL ,
  `address` VARCHAR (255) ,
  `status` ENUM('pending', 'approved', 'canceled') NOT NULL DEFAULT 'pending',
  `created_at` DATETIME NOT NULL DEFAULT NOW(),

  PRIMARY KEY(`id`)
)ENGINE=InnoDB;

CREATE TABLE orders_details (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `products_id` INT NOT NULL UNSIGNED ,
  `orders_id` INT NOT NULL UNSIGNED  ,
  `qty` INT NOT NULL,

  PRIMARY KEY(`id`),
  FOREIGN KEY (`orders_id`)   REFERENCES   orders(`id`)   ON DELETE SET NULL,
  FOREIGN KEY (`products_id`) REFERENCES products(`id`) ON DELETE SET NULL
)ENGINE=InnoDB;

CREATE TABLE admins (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR (255) NOT NULL ,
  `email` VARCHAR (255) NOT NULL UNIQUE,
  `password` VARCHAR (255) NOT NULL ,
  `is_super` ENUM('yes', 'no')NOT NULL DEFAULT 'NO',
  `created_at` DATETIME NOT NULL DEFAULT NOW(),

  PRIMARY KEY(`id`)
)ENGINE=InnoDB;