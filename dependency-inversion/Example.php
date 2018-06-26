<?php

interface ConnectionInterface {
    public function connect();
}

class DbConnection implements ConnectionInterface {

    public function connect()
    {
        var_dump('Connect to database');
    }
}

class PasswordReminder {

    protected $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getConnection() {
        return $this->dbConnection->connect();
    }
}

(new PasswordReminder(new DbConnection()))->getConnection();