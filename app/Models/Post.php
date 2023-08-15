<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body'
        ];
    
    public function getByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べ、limitで件数制限をかける。
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atの降順で並べ、limitをかける。
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
