CREATE DATABASE IF NOT EXISTS idk_ambiente_web;

USE idk_ambiente_web;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(150) NOT NULL,
    identificacion VARCHAR(50) UNIQUE NOT NULL,
    edad INT,
    sexo VARCHAR(20),
    sintomas TEXT,
    posible_afliccion VARCHAR(255),
    diagnostico TEXT,
    fecha_ingreso DATE NOT NULL
);