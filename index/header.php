<?php 
namespace jay;

use jay\Form\footer; // without as you can use it as it is
use jay\Form as ok;

class header{
    public function __construct(){
        echo "without as <br />:::";
        new footer();
        echo 'with alias <br />:::';
        new ok\footer();
        
        echo __CLASS__ . '<br />';
    }

}

const DOG = 'THIS IS A DOG!';