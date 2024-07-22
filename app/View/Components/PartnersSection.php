<?php

namespace App\View\Components;

use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class PartnersSection extends Component
{
    public function render(): View
    {
        $partners = Cache::remember('partners', config('cache.cache_time'), function () {
            return Partner::query()
                ->where('is_active', true)
                ->get();
        });

        return view('components.partners-section', compact('partners'));
    }
}
