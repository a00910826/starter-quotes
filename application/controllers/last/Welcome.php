<?php

/**
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal page
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // grab the first item in the list, to pass on to our view
        $record = $this->quotes->last();

        $this->data = array_merge($this->data, $record);

        $this->render();
    }
    
    

    

}

/* End of file First.php */
/* Location: application/controllers/First.php */