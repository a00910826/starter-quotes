<?php

/**
 * The first after the logo in the menu bar.
 * The page should display the first item in the list with their picture and quote.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal page
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // grab the first item in the list, to pass on to our view
        $record = $this->quotes->first();

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

    function zzz() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // grab the first item in the list, to pass on to our view
        $record = $this->quotes->get(1);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */