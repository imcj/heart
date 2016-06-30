<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OAuth2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->delete();
        $datetime = Carbon::now();
        $clients = [
            [
                'id' => 'client1id',
                'secret' => 'client1secret',
                'name' => 'client1',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'id' => 'swagger',
                'secret' => 'swagger',
                'name' => 'swagger',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
        ];
        DB::table('oauth_clients')->insert($clients);
        $clientEndpoints = [
            [
                'client_id' => 'client1id',
                'redirect_uri' => 'http://example1.com/callback',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
            'client_id' => 'swagger',
            'redirect_uri' => 'http://127.0.0.1:8000/o2c.html',
            'created_at' => $datetime,
            'updated_at' => $datetime,
            ],
            ];
        DB::table('oauth_client_endpoints')->insert($clientEndpoints);
    }
}
