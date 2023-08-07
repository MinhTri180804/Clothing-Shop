<?php
    class About extends Controller {
        public function index() {
            $dataModel['content'] = 'about';
            $dataModel['sub_content']['a'] = [];
            $this->render('layout/client_layout', $dataModel);
        }
    }
?>