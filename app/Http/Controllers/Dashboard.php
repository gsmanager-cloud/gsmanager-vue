<?php

namespace App\Http\Controllers;

use GSManager\Http\Request;
use GSManager\RouteAttributes\Attributes\Get;
use Inertia\Inertia;


class Dashboard extends Controller
{
    #[Get('/', name: 'dashboard')]
    public function __invoke()
    {
        return Inertia::render('Dashboard');
    }
}
