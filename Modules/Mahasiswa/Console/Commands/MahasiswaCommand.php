<?php

namespace Modules\Mahasiswa\Console\Commands;

use Illuminate\Console\Command;

class MahasiswaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MahasiswaCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mahasiswa Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
