<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Fact;
use App\Models\Introduction;
use App\Models\Logo;
use App\Models\Message;
use App\Models\Service;
use App\Models\Social;
use App\Models\Sponsor;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function welcome(){
        $all_banners= Banner::all();
        $all_messages= Message::all();
        $all_socials= Social::all();
        $all_contacts= Contact::all();
        $all_logos= Logo::all();
        $all_introductions= Introduction::all();
        $all_facts= Fact::all();
        $all_sponsors= Sponsor::all();
        $all_testimonials= Testimonial::all();
        $all_blogs= Blog::all();
        $all_services= Service::all();
        $all_areas= Area::all();
        $all_educations = Education::all();
        return view('frontend.index',[

           'all_educations'=> $all_educations,
           'all_areas'=>$all_areas,
           'all_services'=>$all_services,
           'all_blogs'=>$all_blogs,
           'all_testimonials'=>$all_testimonials,
           'all_sponsors'=>$all_sponsors,
           'all_facts'=>$all_facts,
           'all_introductions'=>$all_introductions,
           'all_banners'=>$all_banners,
           'all_logos'=>$all_logos,
           'all_contacts'=>$all_contacts,
           'all_socials'=>$all_socials,
           'all_messages'=>$all_messages,




         ]);

     }
     function about(){

        return view('about');
    }
}
