<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
class Plagiarism extends Controller
{
    //
    public function check(){
        //for checking plagiarism and retrieving the results

        $data = request()->get('plagText');

        $response = Http::withBody(
            "key=150fc3f59bf07a06e54a71a4ff39044a & data= $data",'application/x-www-form-urlencoded',
        )->post('https://www.check-plagiarism.com/apis/checkPlag');

        $urls = json_decode($response)->details[0]->matched_urls;
        $plag = json_decode($response)->plagPercent;
        $totalMatch = json_decode($response)->details[0]->totalMatches;
        $details = json_decode($response)->details;
        
        $results = [
            'data' => $data,
            'urls'=> $urls,
            'plag' => $plag,
            'total' => $totalMatch,
            'details' => $details,

        ];

        return view('/check',['results' => $results]);
    }
    function datalist(){
        
        return User::all();
    }
}
