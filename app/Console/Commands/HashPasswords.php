<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class HashPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hash:passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hash existing plain-text passwords in the users table';

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
     * @return int
     */
    public function handle()
    {
        $users = User::all();
    
        foreach ($users as $user) {
            // Check if the password needs to be rehashed
            if (Hash::needsRehash($user->password) === false) {
                $user->password = Hash::make($user->password);
                $user->save();
            }
        }
    
        $this->info('Passwords hashed successfully!');
    }
    
}
