<?php

namespace App\Http\Controllers;
use App\Models\Talent;
class PageController extends Controller
{
    public function findTalent(){
        $talent1 = new \stdClass();
        $talent1->nama = 'Mohammad Andryan';
        $talent1->talent = 'Artificial Intelligence Developer';
        $talent1->link = "img/mohammadandryan.jpg";
        $talent2 = new \stdClass();
        $talent2->nama = 'M Yusuf Alvianto';
        $talent2->talent = 'Full Stack Web Developer';
        $talent2->link = "img/alvin.jpeg";
        $talent3 = new \stdClass();
        $talent3->nama = 'Richard Altaf Hermawan';
        $talent3->talent = 'Full Stack Game Developer';
        $talent3->link = "img/richard.jpeg";
        $talent4 = new \stdClass();
        $talent4->nama = 'Novan Kuncoro';
        $talent4->talent = 'Big Data Analiyzer';
        $talent4->link = "img/novan.jpeg";
        $talent5 = new \stdClass();
        $talent5->nama = 'Mohammad Andryan';
        $talent5->talent = 'Artificial Intelligence Developer';
        $talent5->link = "img/mohammadandryan.jpg";
        $talent6 = new \stdClass();
        $talent6->nama = 'M Yusuf Alvianto';
        $talent6->talent = 'Full Stack Web Developer';
        $talent6->link = "img/alvin.jpeg";
        $talent7 = new \stdClass();
        $talent7->nama = 'Richard Altaf Hermawan';
        $talent7->talent = 'Full Stack Game Developer';
        $talent7->link = "img/richard.jpeg";
        $talent8 = new \stdClass();
        $talent8->nama = 'Novan Kuncoro';
        $talent8->talent = 'Big Data Analiyzer';
        $talent8->link = "img/novan.jpeg";
        $talents = collect(
            [$talent2,$talent1,$talent3,$talent4, $talent5, $talent6, $talent7, $talent8]
        );
        return view('findtalent')->with('talents', $talents);
    }

    public function ownprofil(){
        if (isset($talent)) {

            return view('profil')->with('talent',$talent);
        } else {
            return redirect('login');
        }
    }
    public function profil($id){
    $talent = Talent::where('id','=',$id)->first();
    return view('profil')->with('talent',$talent);
    }

}
