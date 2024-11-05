<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ActiveUsersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    private $users_id;
    public function __construct($users_id)
    {
        $this->users_id = $users_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {


        $users = $this->users_id;

        foreach ($users as  $id) {

            User::where('id', $id)->update(['status' => 1]);
        }
    }
}