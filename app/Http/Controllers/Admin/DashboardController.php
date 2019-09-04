<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MonthlyContribution;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
    	$ctbstat = $this->checkContribution();
    	return view('admin.dashboard', compact('ctbstat'));
    }

    public function setCtb()
    {
    	$mctb = MonthlyContribution::where('current', 1)->latest()->get();
        if(count($mctb) > 1) {
            MonthlyContribution::where('current', 1)->update(['current' => 0]);
            // MonthlyContribution::whereMonth('begin_date', now()->month)->whereYear('begin_date', now()->year)->get();
            $checkmonth = MonthlyContribution::where('begin_date', '>', now()->startOfMonth())->latest()->first();
            if($checkmonth) {
                if(now()->day >= 28)
                    MonthlyContribution::create([
                        'begin_date' => now()->addMonth()->startOfMonth(),
                        'close_date' => now()->addMonth()->endOfMonth(),
                        'current' => 1
                     ]);
                else {
                    $checkmonth->current = true;
                    $checkmonth->save();
                }
            } else {
                if(now()->day >= 28)
                    MonthlyContribution::create([
                        'begin_date' => now()->addMonth()->startOfMonth(),
                        'close_date' => now()->addMonth()->endOfMonth(),
                        'current' => 1]);
                else
                    MonthlyContribution::create([
                        'begin_date' => now()->startOfMonth(),
                        'close_date' => now()->endOfMonth(),
                        'current' => 1
                    ]);
            }
        } elseif (count($mctb) == 1) {
            $checkcur = $mctb->first();
            if(Carbon::parse($checkcur->begin_date)->month != now()->month && Carbon::parse($checkcur->begin_date)->year != now()->year) {
                $checkcur->current = 0;
                $checkcur->save();
                if(now()->day >= 28)
                    MonthlyContribution::create([
                        'begin_date' => now()->addMonth()->startOfMonth(),
                        'close_date' => now()->addMonth()->endOfMonth(),
                        'current' => 1]);
                else
                    MonthlyContribution::create([
                        'begin_date' => now()->startOfMonth(),
                        'close_date' => now()->endOfMonth(),
                        'current' => 1
                    ]);
            } else {
                if(now()->day >= 28) {
                    $checkcur->current = 0;
                    $checkcur->save();
                    MonthlyContribution::create(['begin_date' => now()->addMonth()->startOfMonth(), 'current' => 1]);
                }
            }
            
        } else {
            MonthlyContribution::create(['begin_date' => now()->startOfMonth(), 'current' => 1]);
        }
    }

    private function checkContribution() {
    	$contrib = MonthlyContribution::where('current',1)->latest()->get();
    	if(count($contrib) > 1) {
    		return (object) ['error' => true, 'message' => 'This month contribution date is not set correctly'];
    	} elseif(count($contrib) == 1) {
    		$checkctb = $contrib->first();
    		if(Carbon::parse($checkctb->begin_date)->month != now()->month && Carbon::parse($checkctb->begin_date)->year != now()->year) {
    			return (object) ['error' => true, 'message' => 'This month contribution date is not set correctly.'];
    		} else
    			return (object) ['error' => false, 'message' => 'This month: '.now()->format('F')];
    	} else {
    		return (object) ['error' => true, 'message' => 'This month contribution date has not been set.'];
    	}
    }
}
