<?php

use App\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $episodes = [
            [
                'movie_id' => '1',
                'episode' => '1',
                'title' => 'Lee Yeon, Mountain God'
            ],
            [
                'movie_id' => '1',
                'episode' => '2',
                'title' => 'Yeou Gogae Tragedy'
            ],
            [
                'movie_id' => '1',
                'episode' => '3',
                'title' => 'Imoogi, Behold!'
            ],
            [
                'movie_id' => '1',
                'episode' => '4',
                'title' => 'Please Be Safe'
            ],
            [
                'movie_id' => '1',
                'episode' => '5',
                'title' => 'Imoogi or Lee Yeon?'
            ],
            [
                'movie_id' => '2',
                'episode' => '1',
                'title' => 'My 30th Birthday'
            ],
            [
                'movie_id' => '2',
                'episode' => '2',
                'title' => 'Where do I have to live?'
            ],
            [
                'movie_id' => '2',
                'episode' => '3',
                'title' => 'My First Kiss'
            ],
            [
                'movie_id' => '2',
                'episode' => '4',
                'title' => 'His Family? Or Mine?'
            ],
            [
                'movie_id' => '2',
                'episode' => '5',
                'title' => 'Will You Marry Me?'
            ],
            [
                'movie_id' => '2',
                'episode' => '6',
                'title' => 'My First Husband'
            ],
            [
                'movie_id' => '3',
                'episode' => '1',
                'title' => 'Your Debt'
            ],
            [
                'movie_id' => '3',
                'episode' => '2',
                'title' => 'Come to My Hotel'
            ],
            [
                'movie_id' => '3',
                'episode' => '3',
                'title' => 'The Evil Spirits'
            ],
            [
                'movie_id' => '3',
                'episode' => '4',
                'title' => 'Love From Two World'
            ],
            [
                'movie_id' => '3',
                'episode' => '5',
                'title' => 'Will We Meet Again?'
            ],
            [
                'movie_id' => '4',
                'episode' => '1',
                'title' => 'Who Are You?'
            ],
            [
                'movie_id' => '4',
                'episode' => '2',
                'title' => 'Teach Me to Love'
            ],
            [
                'movie_id' => '4',
                'episode' => '3',
                'title' => 'First Date'
            ],
            [
                'movie_id' => '4',
                'episode' => '4',
                'title' => 'How About You?'
            ],
            [
                'movie_id' => '4',
                'episode' => '5',
                'title' => 'Love at First Swipe'
            ],
            [
                'movie_id' => '5',
                'episode' => '1',
                'title' => 'My Dream'
            ],
            [
                'movie_id' => '5',
                'episode' => '2',
                'title' => 'I Save You'
            ],
            [
                'movie_id' => '5',
                'episode' => '3',
                'title' => 'You Are The One'
            ],
            [
                'movie_id' => '5',
                'episode' => '4',
                'title' => 'Our Dream'
            ],
            [
                'movie_id' => '5',
                'episode' => '5',
                'title' => 'Save Me'
            ],
            [
                'movie_id' => '5',
                'episode' => '6',
                'title' => 'Forever Dreaming'
            ],
            [
                'movie_id' => '6',
                'episode' => '1',
                'title' => 'Trip to Busan'
            ],
            [
                'movie_id' => '6',
                'episode' => '2',
                'title' => 'Trip to Seoul'
            ],
            [
                'movie_id' => '6',
                'episode' => '3',
                'title' => 'Trip to Daek-na'
            ],
            [
                'movie_id' => '6',
                'episode' => '4',
                'title' => 'Trip to Jeju Island'
            ],
            [
                'movie_id' => '6',
                'episode' => '5',
                'title' => 'Final Trip'
            ],
            [
                'movie_id' => '7',
                'episode' => '1',
                'title' => 'Recruiting New Member'
            ],
            [
                'movie_id' => '7',
                'episode' => '2',
                'title' => 'Risotto Challenge'
            ],
            [
                'movie_id' => '7',
                'episode' => '3',
                'title' => 'Apple Challenge'
            ],
            [
                'movie_id' => '7',
                'episode' => '4',
                'title' => 'Duck Breast Challenge'
            ],
            [
                'movie_id' => '7',
                'episode' => '5',
                'title' => 'Tuna Challenge'
            ],
            [
                'movie_id' => '7',
                'episode' => '6',
                'title' => 'Winner Masterchef'
            ],
            [
                'movie_id' => '8',
                'episode' => '1',
                'title' => 'Meet New Member'
            ],
            [
                'movie_id' => '8',
                'episode' => '2',
                'title' => 'Eating Fast Challenge'
            ],
            [
                'movie_id' => '8',
                'episode' => '3',
                'title' => 'Who will be punished?'
            ],
            [
                'movie_id' => '8',
                'episode' => '4',
                'title' => 'Final Game'
            ],
            [
                'movie_id' => '8',
                'episode' => '5',
                'title' => 'Goodbye!'
            ],
            [
                'movie_id' => '9',
                'episode' => '1',
                'title' => 'Guess The Fake!'
            ],
            [
                'movie_id' => '9',
                'episode' => '2',
                'title' => 'Guess The Restaurant'
            ],
            [
                'movie_id' => '9',
                'episode' => '3',
                'title' => 'Guess The Collector'
            ],
            [
                'movie_id' => '9',
                'episode' => '4',
                'title' => 'Which One is Fake?'
            ],
            [
                'movie_id' => '9',
                'episode' => '5',
                'title' => 'Get The Gold!'
            ],
            [
                'movie_id' => '10',
                'episode' => '1',
                'title' => 'Meet The Master'
            ],
            [
                'movie_id' => '10',
                'episode' => '2',
                'title' => 'Our New Member'
            ],
            [
                'movie_id' => '10',
                'episode' => '3',
                'title' => 'Can You Beat Master?'
            ],
            [
                'movie_id' => '10',
                'episode' => '4',
                'title' => 'Dinner Time!'
            ],
            [
                'movie_id' => '10',
                'episode' => '5',
                'title' => 'Morning Challenge'
            ],
            [
                'movie_id' => '10',
                'episode' => '6',
                'title' => 'Farewell, Master!'
            ],
            [
                'movie_id' => '11',
                'episode' => '1',
                'title' => 'Play Along!'
            ],
            [
                'movie_id' => '11',
                'episode' => '2',
                'title' => 'New Friends'
            ],
            [
                'movie_id' => '11',
                'episode' => '3',
                'title' => 'Police Car'
            ],
            [
                'movie_id' => '11',
                'episode' => '4',
                'title' => 'Playing Snow'
            ],
            [
                'movie_id' => '11',
                'episode' => '5',
                'title' => 'Let\'s Play!'
            ],
            [
                'movie_id' => '12',
                'episode' => '1',
                'title' => 'What\'s this?'
            ],
            [
                'movie_id' => '12',
                'episode' => '2',
                'title' => 'Human Feet!'
            ],
            [
                'movie_id' => '12',
                'episode' => '3',
                'title' => 'Where\'s the toy?'
            ],
            [
                'movie_id' => '12',
                'episode' => '4',
                'title' => 'More Friends!'
            ],
            [
                'movie_id' => '12',
                'episode' => '5',
                'title' => 'Ferry trip'
            ],
            [
                'movie_id' => '13',
                'episode' => '1',
                'title' => 'Bikini Bottom'
            ],
            [
                'movie_id' => '13',
                'episode' => '2',
                'title' => 'Live like Larry!'
            ],
            [
                'movie_id' => '13',
                'episode' => '3',
                'title' => 'Burger Recipe'
            ],
            [
                'movie_id' => '13',
                'episode' => '4',
                'title' => 'Plankton Attack!'
            ],
            [
                'movie_id' => '13',
                'episode' => '5',
                'title' => 'Where\'s Mr. Krab?'
            ],
            [
                'movie_id' => '13',
                'episode' => '6',
                'title' => 'Burger For Everyone!'
            ],
            [
                'movie_id' => '14',
                'episode' => '1',
                'title' => 'Meet New Friends!'
            ],[
                'movie_id' => '14',
                'episode' => '2',
                'title' => 'Thomas to The Rescue'
            ],
            [
                'movie_id' => '14',
                'episode' => '3',
                'title' => 'Trip to Kula Village'
            ],
            [
                'movie_id' => '14',
                'episode' => '4',
                'title' => 'Gather, Friends!'
            ],
            [
                'movie_id' => '14',
                'episode' => '5',
                'title' => 'Play With Us!'
            ],
            [
                'movie_id' => '15',
                'episode' => '1',
                'title' => 'Magic Chalk'
            ],
            [
                'movie_id' => '15',
                'episode' => '2',
                'title' => 'Who Are You?'
            ],
            [
                'movie_id' => '15',
                'episode' => '3',
                'title' => 'Slain The Enemy!'
            ],
            [
                'movie_id' => '15',
                'episode' => '4',
                'title' => 'New World'
            ],
            [
                'movie_id' => '15',
                'episode' => '5',
                'title' => 'Penny, Move!'
            ],
            [
                'movie_id' => '15',
                'episode' => '6',
                'title' => 'Goodbye, ChalkZone!'
            ]
        ];

        foreach($episodes as $show) {
            Episode::create($show);
        }
    }
}
