<?php

namespace App\Models;

use App\Models\VaccinationLog;
use App\Models\Against;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationAgainst extends Model
{
    use HasFactory;

    protected $table = 'vaccination_againsts';

    protected $fillable = ['vaccinationlog_id', 'against_id'];

    protected $with = ['vaccinationlog','against' ];

    public function vaccinationlog()
    {
        return $this->belongsTo(VaccinationLog::class);
    }
    public function against()
    {
        return $this->belongsTo(Against::class);
    }
}
