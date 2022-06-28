<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;
    protected $fillable = ['Lists']; //$fillable เป็นการกำหนดว่า แอคทีบิว Lists สามารถแก้ไขเพิ่มเติมข้อมูลได้
}
