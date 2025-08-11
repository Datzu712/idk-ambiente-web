CREATE DATABASE IF NOT EXISTS idk_ambiente_web;

USE idk_ambiente_web;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
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

CREATE TABLE citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(100),
    fecha DATE,
    hora TIME,
    estado ENUM('pendiente', 'confirmada', 'cancelada') DEFAULT 'pendiente',
    nombre_usuario VARCHAR(100)
);

CREATE TABLE recetas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(100) NOT NULL,
    nombre_medico VARCHAR(100) NOT NULL,
    medicamento VARCHAR(255) NOT NULL,
    dosis VARCHAR(100) NOT NULL,
    frecuencia VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    observaciones TEXT
);

CREATE TABLE vacunas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(100) NOT NULL,
    nombre_vacuna VARCHAR(100) NOT NULL,
    fecha_aplicacion DATE NOT NULL,
    dosis VARCHAR(50) NOT NULL,
    observaciones TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);