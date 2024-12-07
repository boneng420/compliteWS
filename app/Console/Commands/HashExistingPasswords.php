<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class HashExistingPasswords extends Command
{
    protected $signature = 'passwords:hash';
    protected $description = 'Hash all unhashed passwords in the accounts table';

    public function handle()
    {
        $accounts = Account::all();
        
        foreach ($accounts as $account) {
            if (!$this->isHashed($account->password)) {
                $account->password = Hash::make($account->password);
                $account->save();
            }
        }

        $this->info('All passwords have been hashed!');
    }

    private function isHashed($password)
    {
        return strlen($password) === 60 && preg_match('/^\$2y\$/', $password);
    }
}