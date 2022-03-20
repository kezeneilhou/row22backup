<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\DataProvider;
use App\Models\RowTower;
use Auth;
use Session;

class DataProviderController extends Controller
{

      public function pending()
      {
        $dp = new DataProvider;
        $data = $dp->returnData(Auth::user()->role);
        $counts = $dp->returnCount(Auth::user()->role);
          return view('backend.DataViews.pending',[
            'datas' => $data['pending'],
            'counts' => $counts
          ]);
      }

      public function approved()
      {
        $dp = new DataProvider;
        $data = $dp->returnData(Auth::user()->role);
        $counts = $dp->returnCount(Auth::user()->role);
        return view('backend.DataViews.approved',[
          'datas' => $data['approved'],
          'counts' => $counts
        ]);
      }

      public function rejected()
      {
        $dp = new DataProvider;
        $data = $dp->returnData(Auth::user()->role);
        $counts = $dp->returnCount(Auth::user()->role);
        return view('backend.DataViews.approved',[
          'datas' => $data['rejected'],
          'counts' => $counts
        ]);
      }

      public function active()
      {
        $dp = new DataProvider;
        $data = $dp->returnData(Auth::user()->role);
        $counts = $dp->returnCount(Auth::user()->role);
        return view('backend.DataViews.approved',[
          'datas' => $data['active'],
          'counts' => $counts
        ]);
      }

      public function reverted()
      {
        $dp = new DataProvider;
        $data = $dp->returnData(Auth::user()->role);
        $counts = $dp->returnCount(Auth::user()->role);
        return view('backend.DataViews.approved',[
          'data' => $data['reverted'],
          'counts' => $counts
        ]);
      }
}
