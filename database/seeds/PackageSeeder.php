<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = config('travel_package');
        foreach ($packages as $item) {
            $package = new Package();
            $package->title = $item['title'];
            $package->description = $item['description'];
            $package->price = $item['price'];
            $package->location = $item['location'];
            $package->date = $item['date'];
            $package->img_url = $item['img_url'];
            $package->save();
        }
    }
}
