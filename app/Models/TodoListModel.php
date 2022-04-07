<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoListModel extends Model{

  protected $table = 'tb_task';
  protected $fillable = [
    'id','nama_kegiatan', 'status'
  ];

}