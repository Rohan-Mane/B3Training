<?php
    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbname = 'myblog';

        private $dbh;

        private $error;
        private $stmt;

        public function __construct(){
            //set DSN
            $dsn = 'mysql:host='.$this->host .';dbname='. $this->dbname;

            //set Options pdo
            $options = array(
                PDO:: ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
            );

            //cREATE NEW PDO
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            }catch(PDOEception $e){
                $this->error = $e->getMessage();
            }
        }

        public function query($query){
            $this->stmt = $this->dbh->prepare($query);

        }

        public function bind($param, $value, $type = null){
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO :: PARAM_INT;
                        break;

                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;

                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;

                    default:
                        $type = PDO::PARAM_STR;
                }
            }

            $this->stmt->bindValue($param, $value, $type);
        }

        public function execute(){//will execute prepared statements
           return $this->stmt->execute();

        }

        public function lastInsertId(){
            $this->dbh->lastInsertId();
        }
        public function resultset(){ //if we fetch the list of data we wanna come back in result set
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>