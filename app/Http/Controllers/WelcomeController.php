<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    //Course Start
                      
    public function course()
    {
        return view('course.course');

    }
    public function basicarduino()
     {
         return view('course.basicarduino');

     }
     public function programmingkids()
      {
          return view('course.programmingkids');

      }
      public function scratchprograms()
       {
           return view('course.scratchprograms');

       }

      public function arduinowithtinkercad()
     {
         return view('course.arduinowithtinkercad');

     }
     
      public function basicrobotics()
     {
         return view('course.basicrobotics');

     }

      public function buildgames()
     {
         return view('course.buildgames');

     }

     public function soccerrobot()
     {
         return view('course.soccerrobot');

     }

     public function iotcar()
     {
         return view('course.iotcar');

     }
    //Course End

    //Shop Start
    public function shop()
    {
        return view('shop.shop');
    }
    public function edublock()
    {
        return view('shop.edublock');
    }
    public function schoolofiot()
    {
        return view('shop.schoolofiot');
    }

    //Press Release Start
    public function pressRelease()
    {
        return view('pressrelease.pressrelease');
    }
    public function press1()
    {
        return view('pressrelease.press1');
    }

    public function press2()
    {
        return view('pressrelease.press2');
    }

    public function press3()
    {
        return view('pressrelease.press3');
    }

    public function press4()
    {
        return view('pressrelease.press4');
    }

    public function solution()
    {
        return view('solution');
    }

    public function register()
    {
        return view('user.register');
    }

    public function termsAndConditions()
    {
        return view('conditions.termsandconditions');
    }
    public function refundPolicy()
    {
        return view('conditions.refundpolicy');
    }
    public function privacyPolicy()
    {
        return view('conditions.privacypolicy');
    }

    public function edublockdigitalmanual()
    {
        return view('shop.edublockdigitalmanual');
    }
    public function edublockdigitalmanualBook()
    {
        return view('shop.edublockdigitalmanualbook');
    }
    public function apkDownload()
    {
        return response()->download('assets/files/edubot-v2.0.0.apk');
    }

    //Footer Content Starts
    public function aboutus()
    {
        return view('footer-content.aboutus');
    }
    public function team()
    {
        return view('footer-content.team');
    }
    public function comunity()
    {
        return view('footer-content.comunity');
    }
    public function partnership()
    {
        return view('footer-content.partnership');
    }
    public function career()
    {
        return view('footer-content.career');
    }
    public function faq()
    {
        return view('footer-content.faq');
    }
    public function LmsFaq()
    {
        return view('footer-content.lmsfaq');
    }
}
