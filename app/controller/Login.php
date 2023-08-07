<?php

    class Login extends Controller {
        public function index() {
            $data['content'] = 'login';
            $this->render('layout/client_layout', $data);
        }
    }//

?>