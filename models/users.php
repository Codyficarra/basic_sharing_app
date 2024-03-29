<?php

class UserModel extends model{
    public function register(){
        //sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);




        $password = md5($post['password']);

        if($post['submit']){
            if($post['name'] == ''  || $post['email'] == '' || $post['password'] == ''){
                messages::setmsg('Please Fill in All Fields', 'error');
                return;
            }

            //insert into postgres
            $this->query('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            //verify
            if($this->lastInsertID()){
                //redirect
                header('Location: '.ROOT_URL.'users/login');
            }
        }
        return;
    }

    public function login(){
        //sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if($post['submit']){
            //compare login to info from users
            $this->query('SELECT * FROM users WHERE email = :email and password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);


            $row = $this->single();

            if($row){
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "email" => $row['email']);

                header('Location: '.ROOT_PATH.'shares');
            }
            else{
                messages::setmsg('Incorrect Login Info', 'error');
            }
        }
        return;
    }

}

?>