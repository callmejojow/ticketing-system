<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $status = ['pending', 'in_progress','solved'];
        $priority = ['limited_days', 'urgent','nonurgent'];

        Ticket::factory()->count(50)->create();
    }
}
