<?php

//currently isn't working needs to be display when at cody.test/shares

class shares extends controller{
    protected function index(){
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->index(), true);
    }

    protected function add(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_PATH.'shares');
        }
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->add(), true);
    }
}
?>