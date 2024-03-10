<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use App\Models\Feedback;
use App\Models\ValueChain;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
        
        // set_time_limit(60); 
        $coffee=Category::where('id',1)->first();
     
        $categories = Category::limit(3)->get();
        return view ('frontend.index',compact('categories','coffee'));
    }

    public function valueChains($id){
      
     $category=Category::findOrFail($id);
 
        return view('frontend.pages.valuechains',compact('category'));
    }

    public function valueChainDetails($id){

        $valuechain=ValueChain::findOrFail($id);
  
        return view('frontend.pages.valuechain_details',compact('valuechain'));
    }

    public function contactUs(){
        return view('frontend.pages.contact_us');
    }

    
    public function sendContactForm (Request $request){
        $data=$request->all();
        dd($data);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
    ]);

    // Mail::to('david.chomba.muriuki@gmail.com')->send(new ContactFormMail($data));

  Mail::send('frontend.pages.email', [
    'name' => $request->get('name'),
    'email' => $request->get('email'),
    'phone' => $request->get('phone'),
    'message' => $request->get('message') ],
    function ($message) {
            $message->from('chombadavies29@gmail.com');
            $message->to('chombadavies29@gmail.com', 'Cordination Commetee')
                    ->subject('Tree Nursery ');
});



     $feedback=Feedback::create($data);
     return back()->with('success','Your message was recorded successfully');
    }



    public function feedBack (Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Get the form data
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $message = $request->input('message');


        try {
           
            Mail::to('chombadavies29@gmail.com')->send(new ContactFormMail($name, $phone, $email, $message));
            $feedback=Feedback::create($request->all());
            
            return redirect()->back()->with('success','Your message has been sent successfully!');
        } catch (\Exception $e) {
           
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }
    }
}
