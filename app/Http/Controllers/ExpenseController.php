<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Expense;
use App\Student;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $expenses = Expense::all();
      $students = Student::all();

      
      return view('expense', compact('expenses',$expenses,'students',$students));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $expense_name = $request->input('expense_name');
      $expense_category = $request->input('expense_category');
      $expense_price = $request->input('expense_price');
      $expense_description = $request->input('expense_description');
      $expense_date = $request->input('expense_date');

      $new_expense = new Expense;
      $new_expense->expense_name = $request->expense_name;
      $new_expense->expense_category = $request->expense_category;
      $new_expense->expense_price = $request->expense_price;
      $new_expense->expense_description = $request->expense_description;
      $new_expense->expense_date = $request->expense_date;
      $new_expense->save();

      return redirect('expense');
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
        $expense = Expense::find($id)->delete();
      return back();
    }
}
