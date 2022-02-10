<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $is_full = request()->routeIs('images', 'gallery');
        return view('layouts.app', compact('is_full'));
    }
}
