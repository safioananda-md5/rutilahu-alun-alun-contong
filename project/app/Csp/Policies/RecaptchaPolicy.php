<?php

namespace App\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class RecaptchaPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this
            ->addDirective(Directive::SCRIPT, 'https://www.google.com')
            ->addDirective(Directive::SCRIPT, 'https://www.gstatic.com')
            ->addDirective(Directive::FRAME, 'https://www.google.com')
            ->addDirective(Directive::FRAME, 'https://www.gstatic.com');
    }
}
