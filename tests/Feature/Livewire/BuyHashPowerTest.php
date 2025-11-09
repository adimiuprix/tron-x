<?php

use App\Livewire\BuyHashPower;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(BuyHashPower::class)
        ->assertStatus(200);
});
