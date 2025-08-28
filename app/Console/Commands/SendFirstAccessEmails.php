<?php

namespace App\Console\Commands;

use App\Mail\FirstAccessMail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendFirstAccessEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-first-access-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia e-mails de acesso para todos os usuários';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new FirstAccessMail($user));
            $this->info("E-mail enviado para: {$user->email}");
        }

        $this->info('Todos os e-mails foram enviados com sucesso!');
    }
}
