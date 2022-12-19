<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(
            function (User $user) {
                $posts = News::factory(5)->create(['user_id' => $user->id]);
                $user->posts()->saveMany($posts);
            }
        );
    }
}
