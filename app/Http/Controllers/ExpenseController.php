<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense.create',['report' => $expenseReport]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ExpenseReport $expenseReport)
    {
        $validData = $request->validate([
            'description' => 'required|min:10',
            'amount'      => 'required|numeric'
        ]);
        $expense = new Expense();
        $expense->description = $request->get('description');
        $expense->amount = $request->get('amount');
        $expense->expenseReportId = $expenseReport->id;
        $expense->save();
        return redirect('/expenseReports/' . $expenseReport->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
