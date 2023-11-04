<?php

namespace Tanvir\ChatgptApi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGptResponse extends Model
{
    use HasFactory;

    protected $table = 'chat_gpt_responses';

    protected $fillable = [
        'user_id',
        'prompt',
        'response'
    ];
}
