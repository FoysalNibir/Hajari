<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;
use View;
use Auth;
use App\Player;
use App\Score;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;


class DashboardController extends BaseController
{	
	public function getDashboard(){
		$players = Player::get();
		if ($players->count() > 0) {
			$players_id = Player::pluck('id');
			$scores_id = Score::pluck('id');
			$p1_scores = Score::where('player_id', $players_id[0])->pluck('score');
			$p2_scores = Score::where('player_id', $players_id[1])->pluck('score');
			$p3_scores = Score::where('player_id', $players_id[2])->pluck('score');
			$p4_scores = Score::where('player_id', $players_id[3])->pluck('score');

			$p1_name = Player::where('id', $players_id[0])->pluck('player');
			$p2_name = Player::where('id', $players_id[1])->pluck('player');
			$p3_name = Player::where('id', $players_id[2])->pluck('player');
			$p4_name = Player::where('id', $players_id[3])->pluck('player');

			$p1_total = Score::where('player_id', $players_id[0])->sum('score');
			$p2_total = Score::where('player_id', $players_id[1])->sum('score');
			$p3_total = Score::where('player_id', $players_id[2])->sum('score');
			$p4_total = Score::where('player_id', $players_id[3])->sum('score');
			
			return View::make('dashboard', compact('scores_id', 'players', 'p1_scores', 'p2_scores', 'p3_scores', 'p4_scores', 'p1_total', 'p2_total', 'p3_total', 'p4_total', 'p1_name','p2_name', 'p3_name', 'p4_name'));
		}
		else{
			$players_id = '';
			$scores_id = '';
			$p1_scores = '';
			$p2_scores = '';
			$p3_scores = '';
			$p4_scores = '';

			$p1_name = '';
			$p2_name = '';
			$p3_name = '';
			$p4_name = '';

			$p1_total = '';
			$p2_total = '';
			$p3_total = '';
			$p4_total = '';
			
			return View::make('dashboard', compact('scores_id', 'players', 'p1_scores', 'p2_scores', 'p3_scores', 'p4_scores', 'p1_total', 'p2_total', 'p3_total', 'p4_total', 'p1_name','p2_name', 'p3_name', 'p4_name'));
		}
		
	}

	public function postNames(){
		$input = Input::all();
    	$names = $input['names'];
    	if (in_array(null, $names, true)) {
    		return Redirect()->back()->with('error','Error: Insert All 4 Palyer Names');	
    	}
    	else{    		
    		if (is_array($names) || is_object($names)){
	    		foreach ($names as $key => $name) {
			        $player = new Player;
			        $player->player = $input['names'][$key];
			        $player->save();
	    		}
	    	}  
	    	return Redirect()->back()->with('status','Player Names Inserted Successfully');
	    }
	}

	public function postScores(){
		$input = Input::all();
    	$scores = $input['scores'];
    	$players = Player::pluck('id');
    	if (in_array(null, $scores, true)) {
    		return Redirect()->back()->with('error','Error: Insert All 4 Scores');	
    	}
    	else {
	    	if ($players->count() > 0) {
	    		if (is_array($scores) || is_object($scores)){
		    		$i = 0;
		    		$checksum = 0;
		    		foreach ($scores as $key => $score) {
				        $point = new Score;
				        $point->score = $input['scores'][$key];
				        $checksum = $checksum + $input['scores'][$key];
				        $point->player_id = $players[$i];
				        $point->save();
				        $i = $i+1;
	    			}
	    			if ($checksum != 360) {
	    				for ($var=0; $var < 4; $var++) { 
	    					$del = Score::orderBy('updated_at', 'desc')->first()->delete();
	    				}
	    				return Redirect()->back()->with('error','Error: Single Game Total Must Be Equal To 360');	    				
	    			}
	    		}
	    		return Redirect()->back()->with('status','Score Inserted Successfully');
	    	}
	    	else{
	    		return Redirect()->back()->with('error','Error: Insert Player Names First');
	    	}
    	}    	
	}

	public function deleteScore($id){
		$score_1=Score::where('id', $id)->delete();
		$score_2=Score::where('id', $id+1)->delete();
		$score_3=Score::where('id', $id+2)->delete();
		$score_4=Score::where('id', $id+3)->delete();
		return Redirect()->back()->with('status','Scores Deleted Successfully');
	}

	public function updateNames() {
    	$input = Input::all();
    	$names = $input['names'];
    	$players = Player::pluck('id');
		if (is_array($names) || is_object($names)){
			$i=0;
    		foreach ($names as $key => $name) {
		        $player=Player::where('id', $players[$i])->first();
		        $player->player = $input['names'][$key];
		        $player->update();
		        $i++;
    		}
	    }  
		return Redirect()->back()->with('status','Names Edited Successfully');   	 
	}

	public function resetAll() {
    	$truncate_players = Player::truncate(); 
    	$truncate_scores = Score::truncate(); 
		return Redirect()->back()->with('status','All Data Has Been Reset Successfully');   	 
	}

	public function getRules() {
		return View::make('rules');   	 
	}
}	
