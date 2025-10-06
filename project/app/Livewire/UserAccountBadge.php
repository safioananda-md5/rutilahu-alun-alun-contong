<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserAccountBadge extends Component
{
    public $countVerification = 0;

    public function render()
    {
        // Cek User Verification
        $this->countVerification = User::where('system_verified_status', 'unverified')->where('role', 'user')->count();
        return view('livewire.user-account-badge');
    }
}
