<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    const STATUS_NOT_YET = 0;
    const STATUS = [
        '未着手',
        '作業中',
        '完了',
    ];

    protected $fillable = ['title', 'due_date', 'status'];

    public function getStatusText(): string
    {
        if (empty(self::STATUS[$this->status])) {
            return "";
        }

        return self::STATUS[$this->status];
    }
}