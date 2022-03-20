<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Traits\DataProvider;
use App\Models\RowTower;
use Auth;

class SidebarMenu extends Component
{
    public $count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // $data = new DataProvider;
        // $counts = $data->returnCount(Auth::user()->role);
        return view('components.sidebar-menu');
    }
}
