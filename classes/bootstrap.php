<?php
class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $this->request =$request;
        if(empty($this->request["controller"])){
            $this->controller = 'home';
        }
        else{
            $this->controller = $this->request['controller'];
        }
        if(empty($this->request["action"])){
            $this->action = 'index';
        }
        else{
            $this->action = $this->request['action'];
        }



    }

    public function createcontroller(){
        //check class
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            if(in_array("controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                }

                else{ //this is an else for the method_exists
                    //method doesn't exist
                    echo '<h1>Method doesnt exist</h1>';
                    return;
                }
            }

            else{ //this is an else for the in_array
                //base controller doesn't exist
                echo '<h1>base controller not found</h1>';
                return;
            }
        }

        else{ //this is an else for the class_exists
            //controller class doesn't exist
            echo '<h1>controller class doesnt exist</h1>';
            return;
        }
    }

}
?>