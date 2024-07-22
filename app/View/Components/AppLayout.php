<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function __construct(public string $title = '')
    {
        if ($this->title) {
            $this->title = $this->title.' | '.config('app.name');
        } else {
            $this->title = config('app.name');
        }
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}
