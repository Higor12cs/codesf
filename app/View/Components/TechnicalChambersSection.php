<?php

namespace App\View\Components;

use App\Models\TechnicalChamber;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class TechnicalChambersSection extends Component
{
    public function render(): View
    {
        $chambers = Cache::remember('chambers', config('cache.cache_time'), function () {
            return TechnicalChamber::with('members')->get();
        });

        return view('components.technical-chambers-section', compact('chambers'));
    }
}
