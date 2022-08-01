<?php

namespace App\Models;

use App\Models\Lookups\Category;
use App\Models\Lookups\Country;
use App\Models\OpportunityDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Opportunity extends Model
{
    use HasFactory;
    protected $casts = [
        'deadline' => 'datetime'
    ];

    public function detail(): HasOne
    {
        return $this->hasOne(OpportunityDetail::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
