<?php
	// class User{
    //     //properties
    //     public $id;
    //     public $username;
    //     public $email;
    //     public $password;  

    //     public function __construct($username, $password){
    //         $this->username = $username;
    //         $this->password = $password;
    //     }

    //     public function register(){
    //         echo "user registered";
    //     }

    //     public function login(){
           
    //         $this->auth_user();  
    //     }

    //     public function auth_user(){
    //         echo $this->username. ' is  authenticated';
    //     }

    //     public function __destruct(){   //to close db conn
    //         //echo 'Destructor called';
    //     }
    // }


    // $user = new User('Ram', '1122' );

    // // $user->register();
    // $user->login('Rohan', 'Rohan1234');


    //__set, __get, __isset
    class Post{
        private $name;

        public function __set($name, $value){
            echo "Setting ".$name.'to <strong>'.$value.'</strong> <br/>';
            $this->name = $value;
        }
        public function __get($name){
            echo "Getting ".$name.' <strong>'.$this->name.'</strong> <br/>';
        }

        public function __isset($name){
            echo 'Is '.$name. ' set?<br/>';
            return isset($this->name);
        }
    }

    // $post = new Post;

    // $post->name = 'Testing';
    // //echo $post->name;  

    // var_dump(isset($post->name));


    class First{
        public $id = 23;
        protected $name = 'Jhon Dou';

        public function saySomething($word){
            echo $word;
        }
    }

    class Second extends First{
        public function getName(){
            echo $this->name;
        }
    }

    // $second = new Second;
    // echo $second->getName();
    //echo $second->saySomething('Hello world');



    //static methods,properties
    class User{
        public $username;
        public static $minPassLength = 5;

        public static validPassword($password){
            if(strlen($password) >= self::minPassLength) {         //scop resulution operator
                return true;
            }else{
                return false;
            }
        }
    }

     // $password = 'pass';
    // if(User::validatePassword($password)){
    //     echo 'Password is valid';
    // }else{
    //     echo 'Password is Not valid';
    // }

    // echo User::$minPassLength;


    //Abstraction

    abstract class Animal{
        public $name;
        public $color;

        public function describe(){
            return $this->name. ' is '.$this->color;
        }

        abstract public function makeSound();
    }

    class Duck extends Animal{
        public function describe(){
            return parent::describe();
        }

        public function makesOUND(){
            return 'Quack';
        }
    }

    class Dog extends Animal{
        public function describe(){
            return parent::describe();
        }

        public function makesOUND(){
            return 'Bark';
        }
    }

    $animal = new Duck();
    $animal->name = 'Ben';
    $animal->color = 'Yellow';
    //echo $animal->describe();
    echo $animal->makeSound();

    $animal = new Dog();
    $animal->name = 'Larry';
    $animal->color = 'Brown';
    //echo $animal->describe();
    echo $animal->makeSound();

?>