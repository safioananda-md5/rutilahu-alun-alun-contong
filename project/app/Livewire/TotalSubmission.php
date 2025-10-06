<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Submission;

class TotalSubmission extends Component
{
    public $countsubmissions = 0;
    public $countsubmissionsthisweek = 0;

    public function render()
    {
        $this->countsubmissions = Submission::whereNotIn('status', [1, 3, 5, 7, 9])->count();
        $this->countsubmissionsthisweek = Submission::whereNotIn('status', [1, 3, 5, 7, 9])
            ->whereBetween('created_at', [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek(),
            ])
            ->count();
        return view('livewire.total-submission');
    }
}
