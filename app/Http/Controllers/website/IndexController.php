<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\City;
use App\Models\admin\Slider;
use App\Models\vendor\AddListing;
use App\Models\vendor\ListingAmenity;
use App\Models\vendor\TimeSlot;
use App\Models\website\Booking;
use App\Models\website\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
   public function website_index(Request $request)
   {

    $slider = Slider :: get();
    // $city = City :: get();
    $city = City :: where('status','0')->get();
    $category = Category:: get();

        // Initialize the base query
        // $query = AddListing::join('city','city.id','=','add_listing.location_city')
        // ->where('add_listing.status', 'approve')
        // ->where('city.status','0')
        // ->select('add_listing.*','city.status');

        // // Apply city filter if present
        // if (isset($request->city)) {
        //     $query->where('location_city', $request->city);
        // }

        // // Get listing IDs with applied filters
        // $approved_listing_ids = $query->pluck('id');

        // // Fetch unique amenities for these listings
        // $amenities_query = DB::table('listing_amenities')
        //     ->whereIn('listing_id', $approved_listing_ids)
        //     ->distinct()
        //     ->select('listing_id', 'amenity');

        // // Apply category filter if present
        // if (isset($request->category)) {
        //     $amenities_query->where('amenity', $request->category);
        // }

        // // Get the filtered amenities
        // $amenities = $amenities_query->get();

        // // Filter listing IDs based on the amenities to ensure only listings with the specified category are returned
        // if (isset($request->category)) {
        //     $approved_listing_ids = $amenities->pluck('listing_id')->unique();
        // }

        // // Fetch distinct listings based on the filtered listing IDs
        // $approve_listing = AddListing::whereIn('id', $approved_listing_ids)->get();

        // // Attach amenities to listings
        // foreach ($approve_listing as $listing) {
        //     $listing->amenities = $amenities->where('listing_id', $listing->id)->pluck('amenity');
        // }

            $query = AddListing::join('city', 'city.id', '=', 'add_listing.location_city')
        ->where('add_listing.status', 'approve')
        ->where('city.status', '0')
        ->select('add_listing.*', 'city.status');

    // Apply city filter if present, otherwise default to Amravati
    if (isset($request->city)) {
        $query->where('location_city', $request->city);
    } else {
        // Assuming Amravati's city ID is known, replace 1 with Amravati's city ID
        $query->where('location_city', 8); // Replace 1 with the actual ID of Amravati city
    }

    // Get listing IDs with applied filters
    $approved_listing_ids = $query->pluck('id');

    // Fetch unique amenities for these listings
    $amenities_query = DB::table('listing_amenities')
        ->whereIn('listing_id', $approved_listing_ids)
        ->distinct()
        ->select('listing_id', 'amenity');

    // Apply category filter if present, otherwise show all categories
    if (isset($request->category)) {
        $amenities_query->where('amenity', $request->category);
    }

    // Get the filtered amenities
    $amenities = $amenities_query->get();

    // If category is applied, filter listing IDs based on the amenities
    if (isset($request->category)) {
        $approved_listing_ids = $amenities->pluck('listing_id')->unique();
    }

    // Fetch distinct listings based on the filtered listing IDs
    $approve_listing = AddListing::whereIn('id', $approved_listing_ids)->get();
    // echo json_encode($approve_listing );
    // exit();
    // Attach amenities to listings
    foreach ($approve_listing as $listing) {
        $listing->amenities = $amenities->where('listing_id', $listing->id)->pluck('amenity');
    }
    // echo json_encode($approve_listing );
    // exit();

	   $all_reviews = Review:: join('users','users.id','=','review.user_id')
    ->select('review.user_id','review.review','users.*')
    ->get();

    return view('website.index',compact('slider','city','category','approve_listing','all_reviews'));
   }

   public function listing_page(Request $request)
   {
       $listing_page = AddListing :: where('add_listing.id',$request->id) 
       ->leftjoin('vendor_information','vendor_information.add_listing_id','=','add_listing.id')
    //    ->leftjoin('listing_amenities','listing_amenities.listing_id','=','add_listing.id')
        ->select('add_listing.*','vendor_information.add_listing_id','vendor_information.vendor_name','vendor_information.vendor_description','vendor_information.vendor_price','vendor_information.vendor_image','vendor_information.vendor_offer','vendor_information.vendor_discount')
       ->first();
    //     echo json_encode($listing_page);
    //    exit();

    $listing_anemity = ListingAmenity :: where('listing_id',$request->id)
    ->join('category','category.id','=','listing_amenities.amenity')
    ->select('listing_amenities.*','category.category','category.id')
    ->get();


    $booking = Booking :: where('listing_id',$request->id)->get();
    $review = Review::where('listing_id',$request->id)->get();

    $edit_review = Review::where('id',$request->id)
    ->first();

    $reviewCounts = Review::where('listing_id', $request->id)
    ->select('rating', DB::raw('count(*) as count'))
    ->groupBy('rating')
    ->pluck('count', 'rating')
    ->toArray();

// Ensure all ratings from 1 to 5 are included with 0 count if not present
for ($rating = 1; $rating <= 5; $rating++) {
    if (!isset($reviewCounts[$rating])) {
        $reviewCounts[$rating] = 0;
    }
}

$totalReviews = array_sum($reviewCounts);

$totalReviews = array_sum($reviewCounts);
       return view('website.listing_page',compact('listing_page','booking','review','listing_anemity','reviewCounts',
     'totalReviews','edit_review'));

   }

//    public function booking(Request $request)
//    {
// // dd($request->all());
//        // Validate incoming request data
//        if (Auth::check()) {
//         $validator = Validator::make($request->all(), [
//             // 'listing_id' => 'numeric',
//             'date' => 'required',
//             'name1' => 'required|string',
//             'contact_no1' => 'required',
//             'time_slot' => 'required',
//         ]);
    
//         if ($validator->fails()) {
//             // Handle the validation failure
//             return redirect()->back()
//                              ->withErrors($validator)
//                              ->withInput();
//                             //  ->with('error', 'There were validation errors. Please check the form and try again.');
//         }

//     $booking = new Booking();
//     $booking->user_id = Auth::user()->id;
//     $booking->listing_id = $request->listing_id;
//     $booking->date = date('Y-m-d', strtotime(str_replace('/', '-', $request->date)));
//     $booking->name = $request->name1;
//     $booking->contact_no = $request->contact_no1;
//     $booking->time_slot = $request->time_slot;
//     $booking->price = $request->price;
//     // $booking->amenities_name = $request->amenities_name;
//     $booking->amenities_for_booking = $request->amenities_for_booking;
//     $booking->guest = $request->guest;
//     $booking->save();

//     return back()->with(['success'=>'Request Sent Successfully']);
// } else {
//     return redirect()->back()->with('error', 'Please register an account before making a booking.');
// }
//    }

public function booking(Request $request)
{
    if (Auth::check()) {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'name1' => 'required|string',
            'contact_no1' => 'required|digits:10',
            'time_slot' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors()
            ], 422);
        }

        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->listing_id = $request->listing_id;
        $booking->date = date('Y-m-d', strtotime(str_replace('/', '-', $request->date)));
        $booking->name = $request->name1;
        $booking->contact_no = $request->contact_no1;
        $booking->time_slot = $request->time_slot;
        $booking->price = $request->price;
        $booking->amenities_for_booking = $request->amenities_for_booking;
        $booking->guest = $request->guest;
        $booking->save();

        return response()->json([
            'success' => true,
            'message' => 'Request Sent Successfully'
        ]);
    } else {
        return response()->json([
            'error' => true,
            'message' => 'please sign in an account.'
        ], 401);
    }
}


// public function booking(Request $request)
// {
//     if (Auth::check()) {
//         $validator = Validator::make($request->all(), [
//             'date' => 'required',
//             'name1' => 'required|string',
//             'contact_no1' => 'required',
//             'time_slot' => 'required',
//         ]);

//         if ($validator->fails()) {
//             return response()->json([
//                 'errors' => $validator->errors()
//             ], 422);
//         }

//         $booking = new Booking();
//         $booking->user_id = Auth::user()->id;
//         $booking->listing_id = $request->listing_id;
//         $booking->date = date('Y-m-d', strtotime(str_replace('/', '-', $request->date)));
//         $booking->name = $request->name1;
//         $booking->contact_no = $request->contact_no1;
//         $booking->time_slot = $request->time_slot;
//         $booking->price = $request->price;
//         $booking->amenities_for_booking = $request->amenities_for_booking;
//         $booking->guest = $request->guest;
//         $booking->save();

//         return response()->json([
//             'success' => true,
//             'message' => 'Request Sent Successfully!'
//         ]);
//     } else {
//         return response()->json([
//             'error' => 'Please register an account before making a booking.'
//         ], 401);
//     }
// }

   public function check_booking(Request $request)
        {
            // dd($request->all());
            $booking_data = Booking::
            where('listing_id',$request->id)
            ->where('amenities_for_booking', $request->listing_amenity_id)
            ->pluck('date')
            ->toArray();
// $is_booked=false;
// if(in_array($request->date, $booking_data)){
// $is_booked=true;

// }
            $time_slot = TimeSlot::
            where('listing_id',$request->id)
            ->where('category_id', $request->listing_amenity_id)
            ->select('from_time_slot','to_time_slot')
            ->get();

            $listing_amenity = ListingAmenity::
            // join('add_listing','add_listing.id','=','listing_amenities.listing_id')
            // ->where('add_listing.show_price','yes')
            where('listing_id',$request->id)
            ->where('amenity', $request->listing_amenity_id)
            ->select('listing_amenities.*')
            ->first();

            // echo json_encode($listing_amenity);

            return response()->json(['booking_data' => $booking_data , 'listing_amenity' => $listing_amenity,'time_slot' => $time_slot
            // 'is_booked'=>$is_booked
            ]);
        }


     public function check_booking_testttt(Request $request)
        {
            $date = $request->input('date');
        
            // Query the database to check if the selected date is booked
            $isBooked = Booking::
            where('listing_id',$request->id)
            ->where('date', $date)->exists();

            return response()->json(['booked' => $isBooked]);
        }
    //  public function review(Request $request)
    //     {

    //         if (Auth::check()) {
    //     $review = new Review();
    //     $review->user_id = Auth::user()->id;
    //     $review->listing_id = $request->listing_id;
    //     $review->review = $request->review;
    //     $review->rating = $request->rating;
    //     $review->save();

    //     return back()->with(['success'=>'Sent Successfully']);
    //     } else {
    //     return redirect()->back()->with('error', 'Please register an account.');
    //     }
    //     }

    public function review(Request $request)
{
    if (Auth::check()) {

        $validator = Validator::make($request->all(), [
            'rating' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors()
            ], 422);
        }

        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->listing_id = $request->listing_id;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        return response()->json(['success' => 'Review submitted successfully!']);
    } else {
        return response()->json(['error' => 'please sign in an account.']);
    }
}
   
        public function search(Request $request)
        {
            $cityId = $request->input('city');
            $categoryId = $request->input('category');
    
            // Perform your search logic here using the selected cityId and categoryId
            $results = AddListing::where('location_city', $cityId)
                                ->where('category_id', $categoryId)
                                ->get();
    
            return view('website.index', ['results' => $results]);
        }

        public function updateReview(Request $request)
        {
            // dd($request->all());
                // $request->validate([
                //     'review_id' => 'required|exists:reviews,id',
                //     'review_text' => 'required|string',
                // ]);
        
                $review = Review::find($request->id);
                $review->review = $request->review;
                $review->rating = $request->rating;
                $review->save();
        
                return back()->with(['success' => 'Review updated successfully.']);
        }
    

        public function deleteReview(Request $request)
        {
        
                $review = Review::find($request->id);
                $review->delete();         
                return back()->with(['success' => 'Review deleted successfully.']);
        }
    
        public function send_mail(Request $request)
        {
            // dd($request->all());
// if(auth()->check())
// {
            $data = $request->all();

            Mail::send('website.email', ['data' => $data], function ($message) {
                $message->to('bookmyweddinghall@gmail.com')
                    ->subject('Enquiry');
                $message->from('bookmyweddinghall@gmail.com', 'Zhep Wedding');

                


        //     $message->to('tariquewebmedia@gmail.com')
        //     ->subject('Enquiry');
        // $message->from('tariquewebmedia@gmail.com', 'Zhep Wedding');
    });
            // }
            // else
            // {
            //     return back()->with(['error' => 'Please login first']);
            // }

           


        return back()->with(['success' => 'Enquiry sent successfully.']);

        }

        public function history()
        {
            if(auth()->check())
            {
                $history = Booking :: where('user_id',auth()->user()->id)->get();
            }
            else{
                return back()->with(['error' => 'please sign in an account']); 
            }

            return view('website.history',compact('history'));
        }

}
// $approve_listing = AddListing :: join('listing_amenities','listing_amenities.listing_id','=','add_listing.id')
//         ->where('status', 'approve')
//         ->select('add_listing.*','listing_amenities.amenity');
    
//        if(isset($request->city))
//        {
//         $approve_listing= $approve_listing->where('location_city', $request->city);     
//        }
//         if(isset($request->category))
//         {
//         $approve_listing= $approve_listing->where('listing_amenities.amenity', $request->category);    
//         }

    
//        $approve_listing = $approve_listing->get();













// $(document).ready(function () {
//     $('#bookingForm').on('submit', function (e) {
//         e.preventDefault(); // Prevent default form submission

//         var formData = new FormData(this); // Gather form data

//         $.ajax({
//             url: '{{ route('booking.submit') }}', // Replace with your route
//             method: 'POST',
//             data: formData,
//             processData: false,
//             contentType: false,
//             success: function (response) {
//                 // Show success alert
//                 Swal.fire({
//                     icon: 'success',
//                     title: 'Success!',
//                     text: 'Request Sent Successfully!',
//                 });

//                 // Clear form fields after submission
//                 $('#bookingForm')[0].reset();
//             },
//             error: function (xhr) {
//                 // Handle validation errors
//                 if (xhr.status === 422) {
//                     var errors = xhr.responseJSON.errors;
//                     var errorMessages = '';

//                     $.each(errors, function (key, value) {
//                         errorMessages += value[0] + '<br>';
//                     });

//                     Swal.fire({
//                         icon: 'error',
//                         title: 'Oops...',
//                         html: errorMessages,
//                     });
//                 } else {
//                     // Show a generic error message
//                     Swal.fire({
//                         icon: 'error',
//                         title: 'Oops...',
//                         text: 'Something went wrong!',
//                     });
//                 }
//             }
//         });
//     });
// });
