CREATE TABLE tb_users (
  user_id int(11) NOT NULL AUTO_INCREMENT,
  user_email varchar(50) NOT NULL,
  user_password varchar(100) NOT NULL,
  user_nama varchar(100) NOT NULL,
  user_alamat text NOT NULL,
  user_hp varchar(25) NOT NULL,
  user_pos varchar(5) NOT NULL,
  user_role tinyint(2) NOT NULL,
  user_aktif tinyint(2) NOT NULL,
  created_at TIMESTAMP NOT NULL,
  updated_at datetime NOT NULL,
  PRIMARY KEY (user_id),
  UNIQUE KEY (user_email)
  );
  
CREATE TABLE tb_golongan (
  gol_id tinyint(3) NOT NULL AUTO_INCREMENT,
  gol_kode varchar(10) NOT NULL,
  gol_nama varchar(50) NOT NULL,
  created_at TIMESTAMP NOT NULL,
  updated_at datetime NOT NULL,
  PRIMARY KEY (gol_id),
  UNIQUE KEY (gol_kode)
  );
  
CREATE TABLE tb_pelanggan (
  pel_id int(11) NOT NULL AUTO_INCREMENT,
  pel_id_gol tinyint(3) NOT NULL,
  pel_no varchar(20) NOT NULL,
  pel_nama varchar(50) NOT NULL,
  pel_alamat text NOT NULL,
  pel_hp varchar(20) NOT NULL,
  pel_ktp varchar(50) NOT NULL,
  pel_seri varchar(50) NOT NULL,
  pel_meteran int(11) NOT NULL,
  pel_aktif enum('Y','N') NOT NULL,
  pel_id_user int(11) NOT NULL,
  created_at TIMESTAMP NOT NULL,
  updated_at datetime NOT NULL,
  PRIMARY KEY (pel_id),
  UNIQUE KEY (pel_no),
  FOREIGN KEY(pel_id_gol) REFERENCES tb_golongan(gol_id),
  FOREIGN KEY(pel_id_user) REFERENCES tb_users(user_id)
  );
