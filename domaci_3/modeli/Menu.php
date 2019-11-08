<?php

namespace Amplitudo;

use Amplitudo\MenuItem;

require_once 'MenuItem.php';


class Menu implements Renderable
{
    
    private $items; 
    private $page_1;
    private $page_2;
    private $links;

    public function __construct()
    {   
        $this->links = [ ['label' => 'page_one', 
                'pageName' => 'page_1.php',
                'param' => ['id' => 3,
                            'sortBy' => 'date',
                            'brand' => 10,
                            'name' => 'M&M\'S' ]],
                ['label' => 'page_two',
                'pageName' => 'page_2.php',
                'param' => ['id' => 4,
                            'sortBy' => 'date',
                            'brand' => 11,
                            'name' => 'N&M\'E' ]], 
                ['label' => 'homepage',
                'pageName' => 'homepage.php',
                'param' => ['id' => 5,
                            'sortBy' => 'date',
                            'brand' => 12,
                            'name' => 'W&U\'T' ]]
        ];

        $this->page_1 = new MenuItem($this->links[0]['label'], $this->links[0]['pageName'], $this->links[0]['param']);
        $this->page_2 = new MenuItem($this->links[1]['label'], $this->links[1]['pageName'], $this->links[1]['param']);
        $this->homepage = new MenuItem($this->links[2]['label'], $this->links[2]['pageName'], $this->links[2]['param']);
        $this->items = [$this->page_1, $this->page_2, $this->homepage];
    }

    public function render()
    {
        echo " <ul> ";
            foreach($this->items as $item){
               echo "<li>" . $item->render() . "</li>";
            }
        echo " </ul>";
        
    }
}