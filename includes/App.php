<?php

namespace Nhrtsf\TrelloSkin;

use Nhrtsf\TrelloSkin\Traits\GlobalTrait;

/**
 * Controller Class
 */
class App {
    
    use GlobalTrait;
    
    protected $page_slug;
    
    public function __construct()
    {
        $this->page_slug = 'nhrtsf-trello-skin';
    }
}
