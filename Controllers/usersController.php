<?php
class usersController extends Controller{

    function index(){
        #die("Come here!");

        require(ROOT . 'Models/User.php');


        $users = new User();

        $d['users'] = $users->showAllUsers();
        $this->set($d);
        $this->render("index");
    }
    function create()
    {
        #echo $_POST["title"];
        if (isset($_POST["username"]))
        {
            require(ROOT . 'Models/User.php');

            $user= new User();

            if ($user->create($_POST["username"], $_POST["password"],$_POST["email"],$_POST["address"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }

        $this->render("create");
    }
}