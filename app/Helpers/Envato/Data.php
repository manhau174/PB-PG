<?php



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Recruitment;
use App\Post;
// namespace App\Helpers\Envato;
class Data 
{
    //
    public static function CountNotification($user_id){
    	$recruitment = Recruitment::where('user_id', $user_id)->first();
    	$postsOfRecruitments = $recruitment->posts;

		$dem = 0;

		foreach ($postsOfRecruitments as $postsOfRecruitment){
			foreach ($postsOfRecruitment->pbpgs as $pbpg){
				if ($pbpg->pivot->seen == 0) {
					$dem = $dem + 1;
				}
				
				}
		   
		}
		  
		  
    	return $dem;
    }
    public static function check($post_id, $pbpg_id) {
    	// $status = Post::where('id', $post_id)->pbpgs()->where('id', $pbpg_id)->pivot('status');
    	$post = Post::where('id', $post_id)->first();
    	$status = $post->pbpgs->where('id', $pbpg_id)->first()->pivot->status;
    	return $status;
    }
}
