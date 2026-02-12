<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Offer;
class CrudController extends Controller
{
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
        return view('offers/create');
    }

    public function store(Request $request){

    // validate to data from user before send to database
    // make(fields,rules,messages);
       $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required'
            ];

       $messages = [
            'name.required' => 'اسم العرض مطلوب',
            'name.unique' => 'اسم العرض بالفعل موجود فى قاعدة البيانات',
            'price.numeric' => 'يجب ادخال السعر بشكل صحيح'
            ];

    $validator = Validator::make($request ->all(),$rules,$messages);
    if($validator -> fails()){
        return redirect()->back()->withErrors($validator)->withInputs($request ->all());
    }

    // insert data from form to database
             Offer::create([
            'name' => $request -> name,
            'price' => $request -> price ,
            'details' => $request -> details
          ]);
          return redirect()->back()->with(['success' => 'تم اضافةالطلب لقاعدة البيانات بنجاح']);
        }
  
    }
