<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationImage extends Image
{
    use HasFactory;

    protected $table = 'operation_images';

}
