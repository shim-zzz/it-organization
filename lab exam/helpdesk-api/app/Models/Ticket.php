<?php

namespace App\Models;

class Ticket extends Model 
{
    protected $fillable = [
        'requester_name',
        'requester_email',
        'issue_category',
        'priority',
        'subject',
        'description'
    ];

}