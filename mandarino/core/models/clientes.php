<?php
    class Usuarios extends Validator
    {
        private $id = null;
        private $username = null;
        private $password = null;

        public function setId($value)
    	{
    		if ($this->validateId($value)) {
    			$this->id = $value;
    			return true;
    		} else {
    			return false;
    		}
    	}

    	public function getId()
    	{
    		return $this->id;
    	}

        public function setUsername($value)
    	{
    		if ($this->validateAlphanumeric($value, 1, 50)) {
    			$this->username = $value;
    			return true;
    		} else {
    			return false;
    		}
    	}

    	public function getUsername()
    	{
    		return $this->username;
    	}

        public function setPassword($value)
    	{
    		if ($this->validateAlphanumeric($value, 1, 50)) {
    			$this->password = $value;
    			return true;
    		} else {
    			return false;
    		}
    	}

    	public function getPassword()
    	{
    		return $this->password;
    	}

        //Métodos para iniciar sesión.
        public function checkUsername()
        {
            $sql = 'SELECT id_usuario FROM usuarios WHERE Usuario = ?';
            $params = array($this->username);
            $data = Database::getRow($sql, $params);
            if ($data) {
                $this->id = $data['id_user'];
    			return true;
            } else {
                return false;
            }

        }

        public function checkPassword()
        {
            $sql = 'SELECT Contrasena FROM usuarios WHERE Id_usuario = ?';
            $params = array($this->id);
            $data = Database::getRow($sql, $params);
            if ($data) {
                $this->id = $data['user_password'];
    			return true;
            } else {
                return false;
            }

        }
    }
?>
