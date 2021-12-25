<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Stmt\While_;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token_code',
        'expired_time'
    ];

    public static function generate()
    {
        $availableTokens = self::all();

        do {
            $token = Str::random(6);
        } while ($availableTokens->contains('token_code', $token));

        return $token;
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
