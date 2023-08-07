<?php 

    class Contact extends Controller {
        public function index() {
            $dataModel['content'] = 'contact';
            $this->render('layout/client_layout', $dataModel);
        }
    }

?>