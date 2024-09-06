<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'tax_code',
        'address',
        'representatives',
        'hot_line',
        'date_operation',
        'sub_domain',
        'is_primary_domain',
        'parent_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_primary_domain' => 'boolean',
        'date_operation' => 'date',
    ];

    /**
     * Get the parent company.
     */
    public function parent()
    {
        return $this->belongsTo(Company::class, 'parent_id');
    }

    /**
     * Get the child companies.
     */
    public function children()
    {
        return $this->hasMany(Company::class, 'parent_id');
    }
}