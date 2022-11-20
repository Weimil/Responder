<?php

namespace App\Library\Models;

use Responder\Database\Model;

class BookModel extends Model
{
    // ════════════════════════════════════════

    const CONNECTION = 'default';
    
    const TABLE = 'books';

    const ID = 'id';

    // ════════════════════════════════════════
    
    protected array $fillables = [
        'name'
    ];
    
    // ════════════════════════════════════════

    public function query()
    {
        //
    }
}
