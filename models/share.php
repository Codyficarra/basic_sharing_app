<?php

class ShareModel extends model{
    public function Index(){
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        $rows = $this->resultset();
       return $rows;
    }


    public function add(){
        //sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){
            
            if(empty($post['title']) || empty(['body'])){
                messages::setmsg('Please Fill in All Fields', 'error');
                return;
            }

            //insert into postgres
            $this->query('INSERT INTO shares(title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);
            $this->execute();
            //verify
            if($this->lastInsertID()){
                //redirect
                header('Location: '.ROOT_PATH.'shares');
            }
        }
        return;
    }
}

?>