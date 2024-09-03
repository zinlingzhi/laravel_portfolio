<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        // return DB::table('posts')->where('id', '>', 10)->where('id', '<', 20)->get();
        // return DB::table('posts')->pluck('title');
        // Connection of Database
        // Return DB Manual Connection
        // DB::table('posts')->insert(
        //     [
        //         'title' => 'This is a test data',
        //         'description' => 'Lorem ipsum dolor sit, amet consectetur adipiscing elit. Dolores, est, assumenda totam molestiae nam repellendus officiis laboriosam blanditiis corrupti dicta illum quae consequatur unde. Saepe beatae perferendis blanditiis sapiente iste.',
        //         'status' => 1,
        //         'publish_date' => date('Y-m-d'),
        //         'user_id' => 1
        //     ]
        //     );

        //     dd('success');
        // return view('home', compact('blogs'));

        // $post = Post::where('id', 61)->first();

        // $post->title = "This is a new title";
        // $post->description = "This is a new description!";
        // $post->save();

        // dd('success');

        // $post = Post::create([
        //     'title' => 'This is from Mass Assign',
        //     'description' => 'This is a description from mass Assign',
        //     'status' => 1,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 1
        // ]);

        // dd('success');

        // Post::where('id', 3)->delete();
        // dd('success');

        // return Post::all();
        // return Post::onlyTrashed()->get();
        // return Post::withTrashed()->find(3)->restore();
    }
}
