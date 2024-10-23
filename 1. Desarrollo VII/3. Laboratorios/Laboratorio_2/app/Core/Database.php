<?php

class Database
{

    // Documento con los credenciales
    private string $file = '../db_config.json';

    // Credenciales
    private string $host;
    private string $db_name;
    private string $username;
    private string $password;

    private mysqli $connection;

    public function __construct()
    {
        $this->gathering();
    }

    //Returns a mysqli connection to a database
    public function getConnection() : mysqli
    {
        $this->connection = null;

        $this->connection = new mysqli($this->host, $this->username, 
                $this->password, $this->db_name);

        return $this->connection;
    }

    // Gets all the data from db_config.json
    private function gathering() : void
    {
        if (file_exists($this->file))
        {
            try 
            {
                $config = json_decode(file_get_contents($this->file), true);
            
                $this->host = $config['host'];
                $this->db_name = $config['db_name'];
                $this->username = $config['username'];
                $this->password = $config['password'];
            } 
            catch (Exception $e) 
            {
                error_log(print_r("Error inesperado.\n" . $e, true));
            }
        }
        else
            die("config. file not found");
    }

}

?>