<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csd_project extends Model
{
    use HasFactory;
    public $table = '2022_application_development_and_support_exam_data';
    protected $fillable = [
                    'Project_Ref',
                    'Country',
                    'Implementing_Office',
                    'Project_Title',
                    'Grant_amount_USD',
                    'Dates_from_GCF',
                    'Start_Date',
                    'Duration_months',
                    'End_Date',
                    'Readiness_or_NAP',
                    'Type_of_readiness',
                    'First_disbursement_amount',
                    'Status',                 
    ];
}
