<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'genre_id' => '1',
                'title' => 'Tale of The Nine Tailed',
                'photo' => 'tale.jpg',
                'description' => 'Lee Yeon (Lee Dong-Wook) was once the mountain spirit of Baekdudaegan. Lee Yeon now lives his life as a nine tailed fox in human form. He has lived this way for hundreds of years.',
                'rating' => '4'
            ],
            [
                'genre_id' => '1',
                'title' => 'Because This is My First Life',
                'photo' => 'because.jpg',
                'description' => 'Nam Se-Hee (Lee Min-Ki) is a single man in his early 30\'s. He owns his home, but he owes a lot on his mortgage. Yoon Ji-Ho (Jung So-Min) is a single woman in her early 30\'s.',
                'rating' => '3'
            ],
            [
                'genre_id' => '1',
                'title' => 'Hotel Del Luna',
                'photo' => 'hotel.jpg',
                'description' => 'Jang Man-Wol (IU) is the CEO of Hotel del Luna. The hotel is situated in downtown in Seoul and has a very old appearance.',
                'rating' => '5'
            ],
            [
                'genre_id' => '1',
                'title' => 'Love at First Swipe',
                'photo' => 'love.jpg',
                'description' => 'A 35-year old school teacher who is painfully single try looking for a partner through dating apps, he downloads "Swipe" where he meets a girl and they grow closer day by day.',
                'rating' => '4'
            ],
            [
                'genre_id' => '1',
                'title' => 'While You Were Sleeping',
                'photo' => 'while.jpg',
                'description' => 'Hong-Joo (Bae Suzy) lives with her mother and helps her run a pork restaurant. Hong-Joo is haunted by seeing the future deaths of others in her dreams.',
                'rating' => '4'
            ],
            [
                'genre_id' => '3',
                'title' => 'House On Wheels',
                'photo' => 'house.jpg',
                'description' => 'Three actors travel across South Korea in a wheeled house and invite guests to stay with them for a night or two.',
                'rating' => '5'
            ],
            [
                'genre_id' => '3',
                'title' => 'Master Chef',
                'photo' => 'masterchef.jpg',
                'description' => 'MASTERCHEF, the new series that takes amateur chefs - many of whom simply cook as a hobby - and attempt to turn one of them into a culinary master.',
                'rating' => '4'
            ],
            [
                'genre_id' => '3',
                'title' => 'Running Man',
                'photo' => 'running.jpg',
                'description' => 'Running Man was originally classified as an "urban action variety", a genre of variety shows in an urban environment.',
                'rating' => '4'
            ],
            [
                'genre_id' => '3',
                'title' => 'The Sixth Sense',
                'photo' => 'sixth.jpg',
                'description' => 'Korea’s top stars have gathered to really use their sixth sense. Each week they will encounter the hottest places or people and have to distinguish one fake set-up.',
                'rating' => '3'
            ],
            [
                'genre_id' => '3',
                'title' => 'Master in The House',
                'photo' => 'master.jpg',
                'description' => 'Almost everyone questions the purpose and goal of life. And most successful people have unique perspectives and lifestyles that have made them stand out from the norm.',
                'rating' => '3'
            ],
            [
                'genre_id' => '2',
                'title' => 'Pororo',
                'photo' => 'pororo.jpg',
                'description' => 'Pororo the Little Penguin (Korean: 뽀롱뽀롱 뽀로로, romanized: Pporongpporong Ppororo) is a Korean computer-animated television series created by Iconix Entertainment.',
                'rating' => '4'
            ],
            [
                'genre_id' => '2',
                'title' => 'Lucas The Spider',
                'photo' => 'lucas.jpg',
                'description' => 'Lucas the Spider was an animated character created by animator Joshua Slice, named after and voiced by his nephew. Lucas is based on a jumping spider and has starred in multiple short YouTube videos.',
                'rating' => '4'
            ],
            [
                'genre_id' => '2',
                'title' => 'Spongebob Squarepants',
                'photo' => 'spongebob.jpg',
                'description' => 'SpongeBob SquarePants is an American animated comedy television series created by marine science educator and animator Stephen Hillenburg for Nickelodeon. The series chronicles the adventures in the fictional underwater city of Bikini Bottom.',
                'rating' => '5'
            ],
            [
                'genre_id' => '2',
                'title' => 'Thomas and Friends',
                'photo' => 'thomas.jpg',
                'description' => 'Join Thomas and Friends for five all-new, exciting adventures! When Harold breaks down, Thomas and Duck are asked to take him for repairs but Thomas has something more fun in mind which only leads to trouble.',
                'rating' => '3'
            ],
            [
                'genre_id' => '2',
                'title' => 'ChalkZone',
                'photo' => 'chalkzone.jpg',
                'description' => 'ChalkZone is an American animated television series created by Bill Burnett and Larry Huber for Nickelodeon that ran from 2002 until 2008.',
                'rating' => '5'
            ]
        ];

        foreach($movies as $show) {
            Movie::create($show);
        }
    }
}
