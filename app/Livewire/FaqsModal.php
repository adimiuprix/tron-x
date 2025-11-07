<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq;

class FaqsModal extends Component
{
    public $faqs = [];

    public function mount()
    {
        $this->faqs = Faq::all();
    }
    
    public function render()
    {
        return view('livewire.faq-modal');
    }
}
