<?php

namespace App\View\Components;

use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PartnersSection extends Component
{
    public function render(): View
    {
        $partners = Partner::query()
            ->where('is_active', true)
            ->get();

        return view('components.partners-section', compact('partners'));
    }
}
