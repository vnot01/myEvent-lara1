<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'tittle'=>'Event1',
                'venue_id'=>'1',
                'slug'=>'event1',
                'thumbnail'=>'images/events/thumbnail/mZyCKGo1lu3SFCSOQmxB6OGsGynk5TvTrrjXPnge.jpg',
                'poster'=>'images/events/poster/k7QyrhQflKXKCfENXDdz8i4QB4PwIeX8obJMzhXE.jpg',
                'venue_id'=>'1',
                'video_link'=>'eMNRoijZPXgBVmmufYAf1vDAM2ArQCSc90SolZz8.mp4',
                'is_featured'=>true
            ],
            [
                'tittle'=>'Event2',
                'venue_id'=>'1',
                'slug'=>'event2',
                'thumbnail'=>'images/events/thumbnail/C7RmMhD0LVO9F4lAwcMbsPNTn6ur2aTrANYKvvgG.jpg',
                'poster'=>'images/events/poster/cEO07w4l7b9YAj5brC9sTXCmzE89SpT8w1mXgwk4.png',
                'venue_id'=>'1',
                'video_link'=>null,
                'is_featured'=>false
            ],
            [
                'tittle'=>'Event3',
                'venue_id'=>'2',
                'slug'=>'event3',
                'thumbnail'=>'images/events/thumbnail/NmbDRCc5EpIjv3Ak49ZvymlQGywtGFvuX9S0hwiP.jpg',
                'poster'=>'images/events/poster/KFJ3tFr1FtbYTkv2vH8zL2CPkEBVhPEhL6kdAKCH.jpg',
                'venue_id'=>'3',
                'video_link'=>null,
                'is_featured'=>false
            ]
        ]);

        DB::table('event_tags')->insert([
            [
                'tittle'=>'Feri Febria',
                'slug'=>'feri-febria',
                'type'=>'Sponsor',
                'status'=>true,
            ]
        ]);
    }
}
