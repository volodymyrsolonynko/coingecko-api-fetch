<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Coin;

class FetchCoinData extends Command
{
    protected $signature = 'fetch:coin-data';
    protected $description = 'Fetches data from the Coingecko API endpoint and stores it in database'; 

    public function handle()
    {
        try {
            $apiEndpoint = 'https://api.coingecko.com/api/v3/coins/list?include_platform=true';
            $response = Http::get($apiEndpoint);
            
            foreach ($response->json() as $coin) {
                $coinRow = [
                    'id' => $coin['id'],
                    'name' => $coin['name'],
                    'symbol' => $coin['symbol'],
                    'platforms' => json_encode($coin['platforms']),
                ];
                Coin::insert($coinRow);
            }

            $this->info('Data fetched successfully and stored in database!');
            return 0;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $this->error('An error occurred while fetching data!');
            return 1;
        }
    }
}
