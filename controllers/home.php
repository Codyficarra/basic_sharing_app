<?php

class home extends controller{
    protected function index(){
        $viewmodel = new HomeModel();
        $this->returnview($viewmodel->index(), true);
    }
}
?>