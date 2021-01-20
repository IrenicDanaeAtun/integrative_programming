<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        public function AddFriend($Name, $Username, $Email){
            $this->name = $Name;
            echo "{$this->name} Added a friend";
        }
        public function PostaStatus($Name, $Username, $Email){
            $this->name = $Name;
            echo "{$this->name} Posted a Status";
        }
    }

    $myname = new User();
    $myname->AddFriend('Irenic Danae', 'irenicdan', 'irenicdanaeatun@gmail.com'); echo "<br>";
    $myname->PostaStatus('Irenic Danae', 'irenicdan', 'irenicdanaeatun@gmail.com'); 
?>