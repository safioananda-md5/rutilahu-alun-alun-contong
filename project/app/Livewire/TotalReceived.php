<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Submission;

class TotalReceived extends Component
{
    public $submissionreceived = 0;
    public $yearsubmissionreceived = 0;
    public function render()
    {
        $this->submissionreceived = Submission::where('status', 9)->count();
        $this->yearsubmissionreceived = Submission::whereYear('created_at', Carbon::now()->year)
            ->where('status', 9)
            ->count();
        return view('livewire.total-received');
    }
}
