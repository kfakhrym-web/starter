<?php
namespace App\Http\Controllers;
use App\Http\Requests\OfferRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Offer;
use LaravelLocalization;

class CrudController extends Controller
{

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

    // insert data from form to database
             Offer::create([
            'price' => $request->price ,
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
          ]);
          return redirect()->back()->with(['success' => 'تم اضافةالطلب لقاعدة البيانات بنجاح']);
        }

        public function getAllOffers(){
        $offers = Offer::select('id',
            'name_'.LaravelLocalization::getCurrentLocale() . ' as name',
            'price',
            'details_'.LaravelLocalization::getCurrentLocale() . ' as details')
             ->get();
        return view('offers.all',compact('offers'));
        }

    }
