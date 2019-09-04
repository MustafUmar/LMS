<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Account;
use App\User;
use App\Transaction;
use App\Contribution;
use App\MonthlyContribution;

class AccountController extends Controller
{
    public function index()
    {
    	$accounts = Auth::user()->account()->get();
        $accounts->load(['contribute.transaction' => function($q) {
            $q->whereMonth('created_at', now()->month)->whereYear('created_at', now()->year);
        }]);
        $mctb = MonthlyContribution::where('current', 1)->first();
        return view('users.accounts', compact('accounts','mctb'));
    }

    public function newAccount()
    {
    	return view('users.addaccount');
    }

    public function create(Request $request)
    {
    	$request->validate([
	        'account_name' => 'required|string',
	        'account_number' => 'required|unique:accounts|max:10',
	    ]);

	    // return Auth::user()->memberid;

    	Auth::user()->account()->create([
    		'account_name' => $request['account_name'],
    		'account_number' => $request['account_number'],
    		'memberid' => Auth::user()->memberid
    	]);

    	return redirect('/user/accounts')->with(['status' => 'Account successfully created.', 'level' => 'success']);
    }

    public function newContribAccount($id)
    {
        $account = Account::find($id);
        return view('users.addcontribacc', compact('account'));
    }

    public function createContribAccount(Request $request)
    {
        $request->validate([
            'account_name' => 'required|string|max:150'
        ]);

        $account = Account::find($request['aid']);
        $account->contribute()->create([
            'accountname' => $request['account_name'],
            'balance' => 0
        ]);

        return redirect('/user/accounts')->with(['status' => 'Contribution account successfully created.', 'level' => 'success']);
    }

    public function contribute(Request $request)
    {
        $request->validate([
            'ident' => 'present',
            'contribute_amount' => 'required|numeric|between:100,2000000'
        ]);

        DB::beginTransaction();
        try {
            $contrib = Contribution::find($request['ident']);
            $contrib->balance = $contrib->balance + intval($request['contribute_amount']);
            $contrib->save();

            $account = Account::find($contrib->account_id);
            $account->balance = $account->balance + intval($request['contribute_amount']);
            $account->save();

            $trans = new Transaction;
            $trans->amount = $request['contribute_amount'];
            $trans->user()->associate(Auth::user());
            $trans->contribute()->associate($contrib);
            $trans->save();
            DB::commit();
            // return $request->all();
            return redirect('/user/accounts')->with(['status' => 'Contribution successful !!', 'level' => 'success']);
        } catch (Exception $e) {
            error_log($e->getMessage());
            DB::rollBack();
            return redirect('/user/accounts')->with(['status' => 'An error occured, please try again', 'level' => 'danger']);
        }
        
    }
}
