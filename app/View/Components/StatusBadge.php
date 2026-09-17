<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusBadge extends Component
{
    public function __construct(public string $type)
    {
    }

    public function isActive(): bool
    {
        return strtoupper($this->type) !== 'TIDAK AKTIF';
    }

    public function render(): View|Closure|string
    {
        return view('components.status-badge');
    }
}
