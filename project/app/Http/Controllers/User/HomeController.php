<?php

namespace App\Http\Controllers\User;

use App\Models\Business;
use App\Models\Category;
use App\Models\ContactUser;
use App\Models\salutation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactSellerSubmissionMailToUser;
use App\Mail\QuerySubmissionMailToUser;
use App\Models\BusinessReview;
use App\Models\ContactSellerForm;
use App\Models\ImportantLink;
use App\Models\Slider;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::whereIsActive(1)->get();
        $recent_listings = Business::whereIsApproved(1)->whereIsActive(1)->with('category', 'salutation')->orderBy('id', 'DESC')->limit(12)->get();
        return view('user.pages.home.index', compact('categories', 'recent_listings'));
    }
    public function about()
    {
        $important_links = ImportantLink::all();
        return view('user.pages.about.index', compact('important_links'));
    }
    public function privacy()
    {

        return view('user.pages.privacy.index');
    }

    public function listing()
    {
        $categories = Category::whereIsActive(1)->get();
        $data = Business::whereIsApproved(1)->whereIsActive(1)->with('category', 'salutation')->latest();
        // $data = ContactUser::latest();
        if (request()->has('search') && !empty(request()->search)) {
            $data->where('business_name', 'like', '%' . request()->search . '%');
            $data->orWhere('short_description', 'like', '%' . request()->search . '%');
            $data->orWhere('services', 'like', '%' . request()->search . '%');
        }
        if (request()->has('location') && !empty(request()->location)) {
            $data->where('business_address', 'like', '%' . request()->location . '%');
            $data->orWhere('business_city', 'like', '%' . request()->location . '%');
        }
        if (request()->has('category') && !empty(request()->category)) {
            $data->where('category_id', '=', request()->category);
        }
        $data = $data->paginate(15)->withQueryString();
        $important_links = ImportantLink::whereIsActive(1)->get();
        $sliders = Slider::all();

        return view('user.pages.listing.index', compact('data', 'categories', 'important_links', 'sliders'));
    }

    public function listingDetail($id)
    {
        $reviews = BusinessReview::whereBusinessId($id)->get();
        // return $reviews->AVG('rating');
        $categories = Category::whereIsActive(1)->get();
        $data = Business::whereId($id)->whereIsApproved(1)->whereIsActive(1)->with('category', 'salutation')->with('bannerImg')->first();
        // $data = ContactUser::latest();
        if (!isset($data)) {
            return abort('404');
        }
        return view('user.pages.listing.listing_detail', compact('data', 'categories', 'reviews'));
    }

    public function submit_review(Request $req, $id)
    {
        // return $req;
        $review = new BusinessReview();
        $review->business_id = $req->id;
        $review->rating = $req->rating;
        $review->name = $req->name;
        $review->email = $req->email;
        $review->phone = $req->phone;
        $review->review = $req->review;
        $review->save();
        return back()->with('msg', 'Review Submitted Successfully');
    }

    public function contact_seller(Request $req)
    {
        // return $req;
        $review = new ContactSellerForm();
        $review->business_id = $req->business_id;
        $review->name = $req->name;
        $review->email = $req->email;
        $review->phone = $req->phone;
        $review->message = $req->message;
        $review->save();
        Mail::to($req->email)->send(new ContactSellerSubmissionMailToUser($req));
        $responce = array(
            'status'=>'submitted',
            'data' => Business::whereId($req->business_id)->select('contact_person_phone', 'contact_person_email')->first(),
        );
        return response($responce);
        return back()->with('msg', 'Seller will contact to shortly')->with('unmask_contact', 1);
    }

    public function contact()
    {
        return view('user.pages.contact');
    }

    public function submitQuery(Request $req)
    {
        // return $req;
        $query = new ContactUser();
        $query->name = $req->name;
        $query->phone = $req->phone;
        $query->email = $req->email;
        $query->subject = $req->message;
        $query->description = $req->message;
        $query->save();
        Mail::to($req->email)->send(new QuerySubmissionMailToUser($req));
        return view('user.pages.contact');
    }
}
