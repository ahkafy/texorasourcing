<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_name',
        'country',
        'inquiry_type',
        'product_category',
        'target_quantity',
        'target_delivery_date',
        'payment_terms',
        'message',
        'ip_address',
        'status',
    ];
}
