<?php
    class Database
    {
        private static $connection = null;
        private static $statement = null;
        private static $id = null;

        //Método para iniciar la conexión a la base de datos.
        private function connect()
        {
            $server = 'localhost'; //Nombre del servidor, el cual esta de manera local(en mi compu).
            $database = 'mandarino'; //Nombre de la base de datos alojada en PHPMyAdmin.
            $username = 'root'; //Nombre de usuario que contiene todos los privilegios de la base de datos.
            $password = ''; //Contraseña del usuario definido en la variable $username. Se deja vacío ya que no tiene contraseña.
            try {
                @self::$connection = new PDO('mysql:host='.$server.'; dbname='.$database.'; charset=utf8', $username, $password);
            } catch(PDOException $error) {
                exit(self::getException($error->getCode(), $error->getMessage()));
            }
        }
        //Fin del método para conectar con la base de datos.

        //Método para anular la conexión a la base de datos.
        private function desconnect()
        {
            self::$connection = null;
            $error = self::$statement->errorInfo();
            if ($error[0] != '00000') {
                exit(self::getException($error[1], $error[2]));
            }
        }
        //Fin del método de desconexión.

        //Método para ejecutar las sentencias SQL: INSERT, UPDATE y DELETE.
        public static function executeRow($query, $values)
        {
            self::connect();
            self::$statement = self::$connection->prepare($query);
            $state = self::$statement->execute($values);
            self::$id = self::$connection->lastInsertId();
            self::desconnect();
            return $state;
        }
        //Fin del método.

        //Método para obtener el resultado del primer dato de una sentencia tipo SELECT.
        public static function getRow($query, $values)
        {
            self::connect();
            self::$statement = self::$connection->prepare($query);
            self::$statement->execute($values);
            self::desconnect();
            return self::$statement->fetch(PDO::FETCH_ASSOC);
        }
        //Fin del método.

        //Método para obtener todos los datos de una sentencia tipo SELECT.
        public static function getRows($query, $values)
        {
            self::connect();
            self::$statement = self::$connection->prepare($query);
            self::$statement->execute($values);
            self::desconnect();
            return self::$statement->fetchAll(PDO::FETCH_ASSOC);
        }
        //Fin del método.

        //Método que obtiene el valor de la llave primaria del último dato ingresado.
        public static function getLastRowId()
        {
            return self::$id;
        }
        //Fin del método.

        //Errores de la base de datos.
        private static function getException($code, $message)
        {
            switch ($code) {
                case 1045:
                    $message = 'Autenticación desconocida';
                    break;
                case 1049:
                    $message = 'Base de datos desconocida';
                    break;
                case 1054:
                    $message = 'Nombre de campo desconocido';
                    break;
                case 1062:
                    $message = 'Dato duplicado, no se puede guardar';
                    break;
                case 1146:
                    $message = 'Nombre de tabla desconocido';
                    break;
                case 1451:
                    $message = 'Registro ocupado, no se puede eliminar';
                    break;
                case 2002:
                    $message = 'Servidor desconocido';
                    break;
                default:
                    $message = 'Ocurrió un problema, contacte al administrador :(';
            }
            return $message;
        }
    }
?>
