CREATE TABLE IF NOT EXISTS users (
    user_id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (user_id)
    );
    
INSERT INTO users(name,email,password) values('albert','a@',md5('123456'));

CREATE TABLE IF NOT EXISTS `productos` (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(512) NOT NULL,
  descripcion text NOT NULL,
  precio int(11) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO productos (name, descripcion, precio) VALUES ('Movil A','Movil A',10);
INSERT INTO productos (name, descripcion, precio) VALUES ('Movil B','Movil B',15);
INSERT INTO productos (name, descripcion, precio) VALUES ('Movil C','Movil C',20);
INSERT INTO productos (name, descripcion, precio) VALUES ('Movil D','Movil D',25);
INSERT INTO productos (name, descripcion, precio) VALUES ('Movil E','Movil E',26);
INSERT INTO productos (name, descripcion, precio) VALUES ('Movil F','Movil F',27);
INSERT INTO productos (name, descripcion, precio) VALUES ('Movil G','Movil G',22);

CREATE TABLE IF NOT EXISTS `cesta` (
  id int(11) NOT NULL AUTO_INCREMENT,
  product_id int(11) NOT NULL,
  cantidad double NOT NULL,
  user_id int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (product_id) REFERENCES productos(id)
);
