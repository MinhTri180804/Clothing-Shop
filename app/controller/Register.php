<?php

class Register extends Controller {
    public function index() {
        $data['content'] = 'register';
        $this->render('layout/client_layout', $data);
    }
}