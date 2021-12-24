<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    const PENDING = 0;
    const ACCEPT = 1;
    const DENY = 2;

    protected $fillable = [
        'user_id',
        'token_id',
        'status'
    ];

    protected $appends = [
        'status_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function token()
    {
        return $this->belongsTo(Token::class);
    }

    public function getStatusNameAttribute()
    {
        return $this->status == self::DENY ? 'Menunggu' : 
            ($this->status == self::ACCEPT ? 'Disetujui' : 'Ditolak');
    }
}
