<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function dashboard(){

        return view('Frontend.Landing.landing');
    }
    public function admissionNotice(){
        return view('Frontend.Admission.admission-notice');
    }
    public function admissionProcess(){
        return view('Frontend.Admission.admission-process');
    }
    public function admissionTerms(){
        return view('Frontend.Admission.admission-terms');
    }
    public function ContactUs(){
        return view('Frontend.Contact.contact-us');
    }
    public function gallaryUs(){
        return view('Frontend.Gallary.gallary');
    }
    public function paymentFee(){
        return view('Frontend.admission.payment-fee');
    }
    public function teacherInfo(){
        return view('Frontend.Directors.teacher-info');
    }
    public function staffInfo(){
        return view('Frontend.Directors.staff-info');
    }
    public function foodFacilities(){
        return view('Frontend.Directors.food-facilities');
    }
}
