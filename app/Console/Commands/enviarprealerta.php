<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Mail;
use App\Http\Controllers\MailController;

class enviarprealerta extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enviar:emailenviarprealerta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'enviar pre-alerta';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        MailController::enviarprealerta();
    }
}
