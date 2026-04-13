<?php
namespace App\Http\Controllers;
use App\Events\VideoViewer;
use App\Http\Requests\OfferRequest;
use App\Models\Video;
use App\Traits\OfferTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Offer;
use LaravelLocalization;
use App\Scopes\OfferScopes;

class CrudController extends Controller
{
    use OfferTrait;
    public $messages = [];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function getOffers(){
        return Offer::select('id','name') -> get();
    }

    public function getOffers2(){
        return Offer::select('id','name','price') -> get();
    }



    public function create(){
        return view('offers.create');
    }



    public function store(OfferRequest $request){

    // validate to data from user before send to database
    // make(fields,rules,messages);
//       $rules = [
//            'name' => 'required|max:100|unique:offers,name',
//            'price' => 'required|numeric',
//            'details' => 'required',
//            ];
//
//       $messages = [
//            'name.required' =>__('messages.offer is required'),
//            'name.unique' =>__('messages.offer is found enter other name'),
//            'price.numeric' =>__('messages.price is not valid'),
//            ];

//    $validator = Validator::make($request ->all(),$rules,$messages);
//    if($validator -> fails()){
//        return redirect()->back()->withErrors($validator)->withInput($request ->all());
//    }

       $file_name =  $this -> saveImages($request -> photo,'images/offers');

    // insert data from form to database
        Offer::create([
            'photo' => $file_name,
            'price' => $request->price ,
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
              ]);
          return redirect()->back()->with(['success' => 'تم اضافةالطلب لقاعدة البيانات بنجاح']);
        }


        public function getAllOffers(){
        /*
        $offers = Offer::select('id',
            'name_'.LaravelLocalization::getCurrentLocale() . ' as name',
            'price',
            'photo',
            'details_'.LaravelLocalization::getCurrentLocale() . ' as details')
             ->get();
             return view('offers.all',compact('offers'));
             */

             ##################### Apply Pagination ####################
             $offers = Offer::select('id',
            'name_'.LaravelLocalization::getCurrentLocale() . ' as name',
            'price',
            'photo',
            'details_'.LaravelLocalization::getCurrentLocale() . ' as details')
             ->paginate(PAGINATION_COUNT);
            // return view('offers.all',compact('offers'));
            return view('offers.pagination',compact('offers'));
        }

        public function getAllInActiveOffers(){
            // where whereNull whereNotNull  whereIn
            // apply global scope
        // return $InValidOffer = Offer::get();

        // how remove the global scope
        return $InValidOffer = Offer::withoutGlobalScope(OfferScopes::class)->get();
        }


        public function editOffer($offer_id){
        $offer = Offer::find($offer_id);
        if(!$offer) {
            return redirect()->back();
        }
            $offer = Offer::select('id','name_ar','name_en','details_ar','details_en','price','photo')->find($offer_id);
            return view('offers.edit',compact('offer'));
        }

        public function deleteOffer($offer_id)
        {
            $offer = Offer::find($offer_id);
            if(!$offer) {
                return redirect()->back()->with('error',__('messages.offer not exist'));
            }
            $offer->delete();
            return redirect()->route('offers.all')->with(['success' => __('messages.offer deleted successfully')]);
        }

        public function UpdateOffer(OfferRequest $request,$offer_id){
         // validation in other file
            //check if model exists or not
            $offer = Offer::select('id','name_ar','name_en','details_ar','details_en','price','photo')->find($offer_id);
            if(!$offer){
                return redirect()->back();
            }
            // update
            $offer->update($request -> all());

//            $offer->update([
//                'name_ar' => $request->name_ar,
//                'name_en' => $request->name_en,
//                'price' => $request->price
//            ]);
            return redirect() -> back() -> with(['success' => 'تم تحديث البيانات بنجاح']);
        }

        public function getVideo()
        {
            $video = Video::first();
            event(new VideoViewer($video));
           return view('video')->with('video',$video);
        }

    }
