<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    protected $table = "expenseReports";
    public function expenses() {	
        return $this->hasMany(Expense::class , 'expenseReportId');
    }
}
