<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // WARNING: this seeder truncates your people, aliases and images tables
        DB::table('clients')->truncate();    // people
        DB::table('pets')->truncate();   // aliases


        $source_file = storage_path('clients.json'); // data.json
        if (!file_exists($source_file)) {
            die('Source file ' . $source_file . ' not found');
        }

        $data = json_decode(file_get_contents($source_file));

        foreach ($data as $item) {


            $client = new \App\Client; // \App\Person

            $client->first_name = $item->first_name;                // name
            $client->surname = $item->surname;              // title

            $client->save();

            foreach ($item->pets as $petInfo) {
                $pet = new \App\Pet;
                $pet->name = $petInfo->name;
                $pet->client_id = $client->id;
                $pet->breed = $petInfo->breed;
                $pet->weight = $petInfo->weight;
                $pet->age = $petInfo->age;
                $pet->photo = $petInfo->photo;

                $pet->save();
            }
        }
    }
}
