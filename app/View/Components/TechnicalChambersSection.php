<?php

namespace App\View\Components;

use App\Models\TechnicalChamber;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TechnicalChambersSection extends Component
{
    public function render(): View
    {
        $chambers = TechnicalChamber::with('members')->get();

        return view('components.technical-chambers-section', compact('chambers'));
    }
}
