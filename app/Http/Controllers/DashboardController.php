<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index() {
        return match(auth()->user()->role) {
            'coletor' => Inertia::render('dashboard/coletor'),
            'comercio' => Inertia::render('dashboard/comercio'),
            'cooperativa' => Inertia::render('dashboard/cooperativa'),
            default => abort(403)
        };
    }
}
