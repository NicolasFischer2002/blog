
CREATE TABLE `tbcomentarios` ( 
`id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nome` VARCHAR( 30 ) NOT NULL ,
`email` VARCHAR( 40 ) NOT NULL ,
`data` DATE NOT NULL ,
`comentario` VARCHAR( 255 ) NOT NULL 
) ;