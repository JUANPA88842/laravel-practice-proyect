<?php
    namespace App\Models;

    class Listing {
        public static function all(){
            return [
                [
                    'id' => 1,
                    'title' => 'Listing one',
                    'description' => 'Lorem Ipsum'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing two',
                    'description' => 'Lorem Ipsum'
                ]
            ];
        }

        public static function find($id){
            $listings = self::all();

            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }