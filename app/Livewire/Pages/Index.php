<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.base')]
    public function render()
    {
        return view('livewire.pages.index');
    }
}
