<?php

namespace Modules\Mahasiswa\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mahasiswas';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Mahasiswa\database\factories\MahasiswaFactory::new();
    }
}
