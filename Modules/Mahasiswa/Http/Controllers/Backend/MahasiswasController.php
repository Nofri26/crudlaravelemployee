<?php

namespace Modules\Mahasiswa\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class MahasiswasController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Mahasiswas';

        // module name
        $this->module_name = 'mahasiswas';

        // directory path of the module
        $this->module_path = 'mahasiswa::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Mahasiswa\Models\Mahasiswa";
    }

}
