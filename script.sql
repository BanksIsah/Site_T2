DROP DATABASE IF EXISTS Site_T1:
CREATE DATABASE Site_T1;
USE Site_T1;

CREATE TABLE usuarios(
    id SERIAL PRIMARY KEY,
    login VARCHAR(64) NOT NULL UNIQUE,
    senha VARCHAR (32) NOT NULL
);
