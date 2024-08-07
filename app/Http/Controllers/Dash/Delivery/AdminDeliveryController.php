<?php

namespace App\Http\Controllers\Dash\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShipmentRequest;
use App\Models\Delivery;
use Illuminate\Http\Request;

class AdminDeliveryController extends Controller
{
    //

    public function create()
    {
        return view('admin.delivery.create');
    }

    public function store(ShipmentRequest $request)
    {
        //dd(convertPerToEnglish($request->delivery_amount));
        try {
            Delivery::create([
                'title' => $request->title,
                'amount' => (int) convertPerToEnglish($request->delivery_amount),
                'delivery_time' => (int) convertPerToEnglish($request->delivery_time),
                'delivery_time_unit' => $request->delivery_time_unit,
            ]);
            session()->flash('success', __('messages.New_record_saved_successfully'));
            return redirect()->route('admin.delivery.index');
        } catch (\Exception $ex) {
            return view('errors_custom.model_store_error');
        }
    }

    public function edit(Delivery $delivery)
    {
        try {
            return view('admin.delivery.edit', ['delivery' => $delivery]);
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
    }


    public function update(ShipmentRequest $request)
    {
        try {
            Delivery::where('id', $request->delivery_id)->update([
                'title' => $request->title,
                'amount' => convertPerToEnglish($request->delivery_amount),
                'delivery_time' => convertPerToEnglish($request->delivery_time),
                'delivery_time_unit' => $request->delivery_time_unit,
            ]);
            session()->flash('success', __('messages.The_update_was_completed_successfully'));
            return redirect()->route('admin.delivery.index');
        } catch (\Exception $ex) {
            return view('errors_custom.model_store_error');
        }
    }
}
