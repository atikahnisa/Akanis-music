CREATE TABLE tb_artist (
artist_id SMALLINT(5)  NOT NULL AUTO_INCREMENT,
artist_name CHAR(128) NOT NULL,
PRIMARY KEY (artist_id) );

CREATE TABLE tb_album (
artist_id SMALLINT(5)  NOT NULL ,
album_id SMALLINT(4)  NOT NULL ,
album_name CHAR(128) NOT NULL,
PRIMARY KEY (album_id),
FOREIGN KEY (artist_id) REFERENCES tb_artist (artist_id) ON UPDATE CASCADE ON DELETE RESTRICT
 );

CREATE TABLE tb_track (
track_id SMALLINT(3)  NOT NULL ,
track_name CHAR(128) NOT NULL,
artist_id SMALLINT(5)  NOT NULL ,
album_id SMALLINT(4)  NOT NULL ,
time DECIMAL(5,2),
PRIMARY KEY (track_id),
FOREIGN KEY (artist_id) REFERENCES tb_artist (artist_id) ON UPDATE CASCADE ON DELETE RESTRICT,
FOREIGN KEY (album_id) REFERENCES tb_album (album_id) ON UPDATE CASCADE ON DELETE RESTRICT
 ); 

CREATE TABLE tb_played (
artist_id SMALLINT(5)  NOT NULL ,
album_id SMALLINT(4)  NOT NULL ,
track_id SMALLINT(3)  NOT NULL ,
played TIMESTAMP,
FOREIGN KEY (artist_id) REFERENCES tb_artist (artist_id) ON UPDATE CASCADE ON DELETE RESTRICT,
FOREIGN KEY (album_id) REFERENCES tb_album (album_id) ON UPDATE CASCADE ON DELETE RESTRICT,
FOREIGN KEY (track_id) REFERENCES tb_track (track_id) ON UPDATE CASCADE ON DELETE RESTRICT 
); 

CREATE TABLE tb_username (
user_id INT(11) NOT NULL AUTO_INCREMENT,
user_name VARCHAR(100) NOT NULL,
user_password varchar(300) NOT NULL,
PRIMARY KEY (user_id),
UNIQUE KEY (user_name)
);
