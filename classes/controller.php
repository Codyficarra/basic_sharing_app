<?php
abstract class controller{
    protected $request;
    protected $action;

    public function __construct($action, $request){
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    protected function returnview($viewmodel,$fullview){
        $view = 'views/'. get_class($this).'/'.$this->action.'.php';
        if($fullview){
            require_once('views/main.php');
        }
        else{
            require_once($view);
        }
    }

}
?>