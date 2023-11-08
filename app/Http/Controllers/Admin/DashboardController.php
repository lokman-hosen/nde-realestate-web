<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    const moduleDirectory = 'admin.dashboard.';
    public function __construct(
    )
    {
        $this->middleware('auth');
    }

    public function index():view
    {
        $data = [
            'pageTitle' => 'My Dashboard',
        ];
        return view(self::moduleDirectory.'admin', $data);
    }
}
