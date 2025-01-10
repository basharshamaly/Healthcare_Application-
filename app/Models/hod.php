<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class hod extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
    ];

    /**
     * Get the department that owns the hod
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(): HasOne
    {
        return $this->hasOne(department::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(doctor::class);
    }

    public function employ(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}