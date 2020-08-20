<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Work;
use App\Models\Client;
use App\Models\Filter;
use App\Models\Option;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function Ramsey\Uuid\v1;

class AppController extends Controller
{

    public function home(){
        return view('pages.home');
    }

    public function index()
    {
        $slogan = Option::where('name', 'index_slogan')->first();
        $works = Work::latest()->take(6)->get();
        $logos = Client::get();
        $filter = Filter::get();
        $footer = Option::where('name', 'footer')->first();
        $logo = Option::where('name', 'logo')->first();
        $fb = Option::where('name', 'facebook')->first();
        $in = Option::where('name', 'instagram')->first();
        $yt = Option::where('name', 'youtube')->first();
        $indexCover = Option::where('name', 'index_cover')->first();
        $feature1=Option::where('name','feature1')->first();
        $feature1_desc=Option::where('name','feature1_desc')->first();
        $feature2=Option::where('name','feature2')->first();
        $feature2_desc=Option::where('name','feature2_desc')->first();
        $feature3=Option::where('name','feature3')->first();
        $feature3_desc=Option::where('name','feature3_desc')->first();
        return view('pages.index', [
            'works' => $works,
            'logos' => $logos,
            'slogan' => $slogan,
            'filter' => $filter,
            'logo' => $logo, 'footer' => $footer,
            'fb' => $fb,
            'in' => $in,
            'yt' => $yt,
            'indexCover' => $indexCover,
            'feature1'=>$feature1,
            'feature1_desc'=>$feature1_desc,
            'feature2'=>$feature2,
            'feature2_desc'=>$feature2_desc,
            'feature3'=>$feature3,
            'feature3_desc'=>$feature3_desc,
        ]);
    }

    public function portfolio()
    {
        $works = Work::get();
        $filter = Filter::get();
        $footer = Option::where('name', 'footer')->first();
        $logo = Option::where('name', 'logo')->first();
        $portfolioCover = Option::where('name', 'portfolio_cover')->first();
        $portfolioDesc=Option::where('name','portfolio_desc')->first();
        return view('pages.portfolio', ['works' => $works, 'filter' => $filter, 'logo' => $logo, 'footer' => $footer, 'portfolioCover' => $portfolioCover,'portfolioDesc'=>$portfolioDesc]);
    }

    public function about()
    {
        $footer = Option::where('name', 'footer')->first();
        $logo = Option::where('name', 'logo')->first();
        $members = Team::get();
        $aboutDesc=Option::where('name','about_desc')->first();
        $aboutCover = Option::where('name', 'about_cover')->first();
        $abouts=About::get();
        return view('pages.about', ['aboutDesc'=>$aboutDesc,'members' => $members, 'logo' => $logo, 'footer' => $footer, 'aboutCover' => $aboutCover,'abouts'=>$abouts]);
    }

    public function contact()
    {
        $mail = Option::where('name', 'contact_mail')->first();
        $phone = Option::where('name', 'contact_phone')->first();
        $address = Option::where('name', 'contact_address')->first();
        $map = Option::where('name', 'contact_map')->first();
        $footer = Option::where('name', 'footer')->first();
        $logo = Option::where('name', 'logo')->first();
        $contactCover = Option::where('name', 'contact_cover')->first();
        return view('pages.contact', ['mail' => $mail, 'phone' => $phone, 'address' => $address, 'map' => $map, 'logo' => $logo, 'footer' => $footer, 'contactCover' => $contactCover]);
    }
}
