# Practica del 5/11/2024

## Alumno

Gabriel Alexander Calderón Villeda - CV100720

```sql
CREATE TABLE persona (
    id_persona INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT "Nombre de la persona",
	apellido VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT "Apellidos de la persona",
    fecha_nacimiento DATE NOT NULL COMMENT "Fecha de nacimiento de la persona",
    direccion VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT "Direccion de residencia de la persona",
    PRIMARY KEY (id_persona)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
```