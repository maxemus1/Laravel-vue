<?php

namespace App\Console\Commands\Adminlte;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AddUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:add-user {email} {password} {--type=} {--name=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update status of orders';

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
        $name = $this->option('name');
        $type = $this->option('type');

        $user = new User();
        $user->password = Hash::make($this->argument('password'));
        $user->email = $this->argument('email');
        $user->name = empty($name) ? '' : $name;
        $user->type = empty($type) ? User::TYPE_DOCTOR : $type;
        $user->save();

        $this->output->success('User with id ' . $user->id . ' created');
    }
}
