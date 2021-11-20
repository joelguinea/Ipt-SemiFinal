<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [    
              'id'=> 1,
              'name'=> 'Joel',
              'email'=> 'joel6@gmail.com',
              'message'=> 'The product is so nice',
              'rating'=> 10,
  
          ],
          [

            'id'=> 2,
            'name'=> 'Wakalami ',
            'email'=> 'wakalami@yahoo.com',
            'message'=> 'Wow!',
            'rating'=> 10,
  


          ],
          [

            'id'=> 3,
              'name'=> 'Shoppers',
              'email'=> 'shop@gmail.com',
              'message'=> 'Wonderful',
              'rating'=> 10,
   
            ],
            [

              'id'=> 4,
              'name'=> 'Smart',
              'email'=> 'smart@gmail.com',
              'message'=> 'Pretty!',
              'rating'=> 10,

            ],
            [

              'id'=> 5,
              'name'=> ' Boutique',
              'email'=> 'bo@yahoo.com',
              'message'=> 'This botique is so wonderful!',
              'rating'=> 10,

            ],
            [

              'id'=> 6,
              'name'=> ' Shelf',
              'email'=> 'shelf@yahoo.com',
              'message'=> 'Amazing',
              'rating'=> 10,


          ]

        ];
  
        foreach($data as $s){
            \App\Review::create($s);
        }

    }
}
