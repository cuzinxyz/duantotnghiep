<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HistoryTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HistoryTransactionController extends Controller
{
    public function list_transaction(Request $request){
        $transaction = new HistoryTransaction();
        $listTransaction = $transaction::all();
        return view('detail',compact('listTransaction'));
    }
}
