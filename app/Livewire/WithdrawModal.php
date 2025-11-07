<?php

namespace App\Livewire;

use Livewire\Component;

class WithdrawModal extends Component
{
    public $minwd = 0;
    public $maxwd = 0;
    public $available = 0;
    public $fee = 0;
    public $amount = 0;

    public function mount()
    {
        $this->minwd = 0.00000000;
        $this->maxwd = 0.00000000;
        $this->available = 0.00000000;
        $this->fee = 0.00000000;
        $this->amount = 0.00000000;
    }

    public function render()
    {
        return view('livewire.withdraw-modal');
    }
}
