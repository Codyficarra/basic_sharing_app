<?php

//currently isn't working needs to be display when at cody.test/users

class users extends controller{
    protected function register(){
        $viewmodel = new usermodel();
        $this->returnview($viewmodel->register(), true);
    }

    protected function login(){
        $viewmodel = new usermodel();
        $this->returnview($viewmodel->login(), true);
    }

    protected function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();

        //redirect
        header('Location: '.ROOT_PATH);
    }

}
?>