<?php

namespace App\Models;

use App\Models\OpportunityDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Opportunity extends Model
{
    use HasFactory;
    public function detail(): HasOne
    {
        return $this->hasOne(OpportunityDetail::class);
    }
}
