CREATE TABLE centro (id INT AUTO_INCREMENT, estado_id INT NOT NULL, municipio_id INT NOT NULL, parroquia_id INT NOT NULL, direccion TEXT NOT NULL, nombre VARCHAR(120) NOT NULL, responsable VARCHAR(120) NOT NULL, telf1 VARCHAR(120) NOT NULL, telf2 VARCHAR(120), mail1 VARCHAR(120) NOT NULL, mail2 VARCHAR(120), adultos_msalud INT, adultos_fsalud INT, adultos_msocial INT, adultos_fsocial INT, adultos_meconomico INT, adultos_feconomico INT, adultos_mtecnica INT, adultos_ftecnica INT, adultos_mproductiva INT, adultos_fproductiva INT, adultos_f INT, adultos_m INT, adultos_t INT, latitud long, longitud long, type VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX estado_id_idx (estado_id), INDEX municipio_id_idx (municipio_id), INDEX parroquia_id_idx (parroquia_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE atencion (id INT AUTO_INCREMENT, beneficiario_id INT, centro_id INT, estado_id INT, social VARCHAR(255) DEFAULT 'No' NOT NULL, salud VARCHAR(255) DEFAULT 'No' NOT NULL, user_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX beneficiario_id_idx (beneficiario_id), INDEX centro_id_idx (centro_id), INDEX estado_id_idx (estado_id), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE beneficiario (id INT AUTO_INCREMENT, ci BIGINT UNIQUE NOT NULL, nombre VARCHAR(120) NOT NULL, apellido VARCHAR(120) NOT NULL, fnacimiento DATE NOT NULL, sexo VARCHAR(255) NOT NULL, estado_civ VARCHAR(255) NOT NULL, estado_id INT NOT NULL, municipio_id INT NOT NULL, parroquia_id INT NOT NULL, direccion VARCHAR(120) NOT NULL, telf1 VARCHAR(120) NOT NULL, telf2 VARCHAR(120), mail1 VARCHAR(120) NOT NULL, familiar VARCHAR(120) NOT NULL, telf_fam VARCHAR(120) NOT NULL, fallecido VARCHAR(255) DEFAULT 'No' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX estado_id_idx (estado_id), INDEX municipio_id_idx (municipio_id), INDEX parroquia_id_idx (parroquia_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE centro (id INT AUTO_INCREMENT, estado_id INT NOT NULL, municipio_id INT NOT NULL, parroquia_id INT NOT NULL, direccion TEXT NOT NULL, nombre VARCHAR(120) NOT NULL, responsable VARCHAR(120) NOT NULL, telf1 VARCHAR(120) NOT NULL, telf2 VARCHAR(120), mail1 VARCHAR(120) NOT NULL, mail2 VARCHAR(120), adultos_msalud INT, adultos_fsalud INT, adultos_msocial INT, adultos_fsocial INT, adultos_meconomico INT, adultos_feconomico INT, adultos_mtecnica INT, adultos_ftecnica INT, adultos_mproductiva INT, adultos_fproductiva INT, adultos_f INT, adultos_m INT, adultos_t INT, latitud long, longitud long, type VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX centro_type_idx (type), INDEX estado_id_idx (estado_id), INDEX municipio_id_idx (municipio_id), INDEX parroquia_id_idx (parroquia_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE estado (id INT AUTO_INCREMENT, nombre VARCHAR(120) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE municipio (id INT AUTO_INCREMENT, estado_id INT NOT NULL, nombre VARCHAR(120) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX estado_id_idx (estado_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE parroquia (id INT AUTO_INCREMENT, municipio_id INT NOT NULL, nombre VARCHAR(120) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX municipio_id_idx (municipio_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user_estado (user_id BIGINT, estado_id INT, PRIMARY KEY(user_id, estado_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, cedula BIGINT UNIQUE NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE centro ADD CONSTRAINT centro_parroquia_id_parroquia_id FOREIGN KEY (parroquia_id) REFERENCES parroquia(id);
ALTER TABLE centro ADD CONSTRAINT centro_municipio_id_municipio_id FOREIGN KEY (municipio_id) REFERENCES municipio(id);
ALTER TABLE centro ADD CONSTRAINT centro_estado_id_estado_id FOREIGN KEY (estado_id) REFERENCES estado(id);
ALTER TABLE atencion ADD CONSTRAINT atencion_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id);
ALTER TABLE atencion ADD CONSTRAINT atencion_estado_id_estado_id FOREIGN KEY (estado_id) REFERENCES estado(id);
ALTER TABLE atencion ADD CONSTRAINT atencion_centro_id_centro_id FOREIGN KEY (centro_id) REFERENCES centro(id);
ALTER TABLE atencion ADD CONSTRAINT atencion_beneficiario_id_beneficiario_id FOREIGN KEY (beneficiario_id) REFERENCES beneficiario(id);
ALTER TABLE beneficiario ADD CONSTRAINT beneficiario_parroquia_id_parroquia_id FOREIGN KEY (parroquia_id) REFERENCES parroquia(id);
ALTER TABLE beneficiario ADD CONSTRAINT beneficiario_municipio_id_municipio_id FOREIGN KEY (municipio_id) REFERENCES municipio(id);
ALTER TABLE beneficiario ADD CONSTRAINT beneficiario_estado_id_estado_id FOREIGN KEY (estado_id) REFERENCES estado(id);
ALTER TABLE municipio ADD CONSTRAINT municipio_estado_id_estado_id FOREIGN KEY (estado_id) REFERENCES estado(id);
ALTER TABLE parroquia ADD CONSTRAINT parroquia_municipio_id_municipio_id FOREIGN KEY (municipio_id) REFERENCES municipio(id);
ALTER TABLE user_estado ADD CONSTRAINT user_estado_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id);
ALTER TABLE user_estado ADD CONSTRAINT user_estado_estado_id_estado_id FOREIGN KEY (estado_id) REFERENCES estado(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
