<?php

use GSManager\Foundation\Inspiring;
use GSManager\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
