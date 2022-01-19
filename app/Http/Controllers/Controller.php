<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\sales;
use App\Models\sales_detail;
use App\Models\master;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $sales = DB::table('sales')
            ->orderBy('sale_date')
            ->get();

        $salesDetailCategory = DB::table('sales_detail')
            ->select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->get();

        $salesDaily = sales::select(\DB::raw("COUNT(*) as total"), \DB::raw("DAYNAME(sale_date) as day_name"))
            ->groupBy('day_name')
            ->get();

        return view('dashboard', ['sales' => $sales, 'salesDetailCategory' => $salesDetailCategory, 'salesDaily' => $salesDaily]);
    }
}
