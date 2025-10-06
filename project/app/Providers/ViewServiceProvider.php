<?php

namespace App\Providers;

use App\Models\RTRW;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.navbar_admin', function ($view) {
            $posisitonStatus = "";
            $posisitonParent = "";
            $posisitonNumber = "";
            if (Auth::check() && Auth::user()->role === 'rtrw') {
                $posisiton = RTRW::where('user_id', Auth::id())->first();
                $posisitonStatus = $posisiton->status;
                $posisitonParent = $posisiton->parent;
                $posisitonNumber = $posisiton->number;
            }
            $view->with(['posisitonStatus' => $posisitonStatus, 'posisitonParent' => $posisitonParent, 'posisitonNumber' => $posisitonNumber]);
        });

        View::composer('layouts.sidebar', function ($view) {
            $posisitonStatus = "";
            if (Auth::check() && Auth::user()->role === 'rtrw') {
                $posisiton = RTRW::where('user_id', Auth::id())->first();
                $posisitonStatus = $posisiton->status;
            }
            $view->with(['posisitonStatus' => $posisitonStatus]);
        });
    }
}
