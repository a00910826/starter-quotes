<?php

/**
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal page
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // grab the fifth item in the list, to pass on to our view
        $record = $this->quotes->get(5);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */