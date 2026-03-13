<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use LaravelLocalization;

class OfferController extends Controller
{

    use OfferTrait;

    public function create(){
        // view form to add offer
        return view('offersAjex.create');

    }

    public function saveOffer(OfferRequest $request){
        // save offer to database using Ajex
        $file_name =  $this -> saveImages($request -> photo,'images/offers');

        // insert data from form to database
        $offer = Offer::create([
            'photo' => $file_name,
            'price' => $request->price ,
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
        ]);

        if($offer)
      return response() -> json([
          'status' => true,
          'msg' => 'تم الحفظ بنجاح'
      ]);
        else
            return response() -> json([
                'status' => false,
                'msg' => 'فشل حفظ البيانات'
            ]);
    }

    public function show(){
        $offers = Offer::select('id',
            'name_'.LaravelLocalization::getCurrentLocale() . ' as name',
            'price',
            'photo',
            'details_'.LaravelLocalization::getCurrentLocale() . ' as details')
            ->limit(10)->get();
        return view('offersAjex.all',compact('offers'));
    }

    public function delete(Request $request){
        $offer = Offer::find($request->id);
        if(!$offer) {
            return redirect()->back()->with('error',__('messages.offer not exist'));
        }
        $offer->delete();
         return response() -> json([
              'status' => true,
              'msg' => 'تم الحذف بنجاح',
              'id' => $request->id
            ]);
    }

    public function edit(Request $request){
        $offer = Offer::find($request->id);
        if(!$offer) {
            return redirect()->back();
        }
        $offer = Offer::select('id','name_ar','name_en','details_ar','details_en','price','photo')->find($request->id);
        return view('offersAjex.edit',compact('offer'));
    }

    public function Update(Request $request){
        //check if model exists or not
        $offer = Offer::find($request -> id);
        if(!$offer){
            return response() -> json([
                'status' => false,
                'msg' => 'فشل تحديث البيانات'
            ]);
        }
        // update
        $offer->update($request -> all());
        return response() -> json([
            'status' => true,
            'msg' => 'تم تحديث البيانات بنجاح'
        ]);
    }
}
