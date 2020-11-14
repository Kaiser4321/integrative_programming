<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        function __construct($Name, $Username, $Email){
            $this->name = $Name;
            $this->uname = $Username;
            $this->email = $Email;
        }

        function addFriend(){
            echo  $this->name, " Added a friend."; 
        }
        function postStatus(){
            echo  $this->name, " Posted a status."; 
        }
    }

    $me = new User("Abdul Kaiser M. Dianalan", "Kaiser21", "kaiser.dianalan21@gmail.com");
    $me->addFriend();
    echo "<br>";
    $me->postStatus();
?>