CREATE DATABASE inventario;

USE inventario;

CREATE TABLE Usuarios (
idUsuario INT(6) AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100),
correo VARCHAR(50),
contrasena VARCHAR(25),
idRol INT(2),
estatus INT(1)
);

CREATE TABLE Productos (
idProducto INT(6) AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100), 
cantidad INT(8),
estatus INT(1)
);

CREATE TABLE Entradas (
idEntrada INT(6) AUTO_INCREMENT PRIMARY KEY,
cantidad_entrada INT(8),
idUsuario INT(6),
idProducto INT(6),
fecha_hora_entrada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
estatus INT(1),
FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario),
FOREIGN KEY (idProducto) REFERENCES Productos(idProducto)
);

CREATE TABLE Salidas (
idSalida INT(6) AUTO_INCREMENT PRIMARY KEY,
cantidad_salida INT(8),
idUsuario INT(6),
idProducto INT(6),
fecha_hora_salida TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
estatus INT(1),
FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario),
FOREIGN KEY (idProducto) REFERENCES Productos(idProducto)
);

INSERT INTO `usuarios` (`nombre`, `correo`, `contrasena`, `idRol`, `estatus`) VALUES ('Juan Valdez', 'juan@gmail.com', '123456', 2, 1);

INSERT INTO `usuarios` (`nombre`, `correo`, `contrasena`, `idRol`, `estatus`) VALUES ('Ana Carrillo', 'ana@gmail.com', '123456', 1, 1);