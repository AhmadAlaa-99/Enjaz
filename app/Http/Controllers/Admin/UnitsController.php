<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Realty;
use App\Models\Units;
use App\Models\org_envoices;
use Illuminate\Http\Request;


class UnitsController extends Controller
{
    /*Units : reality_id tenant_id type number size furnished furnished_mode kitchen_Cabinets condition_units condition_type Elecrtricity_number gas_number 
    water_number El_current_reading gas_current_reading water_current_reading status
    */

    public function index()
    {
      // $units=Units::all();
        return view('Units.index');
    }
    public function show($id)
    {
        $unit = Units::with('Realties')->where('id',$id)->get();
        return view('Admin.Units.show',compact('unit'));
    }
     public function create()
     {
        return view('Units.create');

     }
     public function store(Request $request)
     {
        
        try {
            Units::create([
                    'reality_id'=> $request->reality_id,
                    'tenant_id'=> $request->tenant_id,
                    'type'=> $request->type,
                    'number'=> $request->number,
                    'unified_number'=> $request->unified_number,
                    'size'=> $request->size,
                    'furnished'=> $request->furnished,
                    'furnished_mode'=> $request->furnished_mode,
                    'kitchen_Cabinets'=> $request->kitchen_Cabinets, 
                    'condition_units'=> $request->condition_units,
                    'condition_type'=> $request->condition_type,
                    'Elecrtricity_number'=> $request->Elecrtricity_number,
                    'gas_number'=> $request->gas_number,
                    'water_number'=> $request->water_number,
                    'El_current_reading'=>$request->El_current_reading,
                    'gas_current_reading'=>$request->gas_current_reading,
                    'El_current_reading'=>$request->El_current_reading,
                    'water_current_reading'=>$request->water_current_reading,
                    'El_current_reading'=>$request->El_current_reading,
                    'status'=>$request->status,
                ]);
            //toastr()->success(trans('messages.success'));
            return redirect()->back();

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
         
     }
     public function edit($id)
     {
        $unit = Units::where('id',$id)->get();
        return view('Admin.Unit.edit',compact('unit'));
        
     }
     public function update($id)
     {
        $unit = Unit::findorFail($id);
        $unit->update([
            'reality_id'=> $request->reality_id,
            'tenant_id'=> $request->tenant_id,
            'type'=> $request->type,
            'number'=> $request->number,
            'unified_number'=> $request->unified_number,
            'size'=> $request->size,
            'furnished'=> $request->furnished,
            'furnished_mode'=> $request->furnished_mode,
            'kitchen_Cabinets'=> $request->kitchen_Cabinets, 
            'condition_units'=> $request->condition_units,
            'condition_type'=> $request->condition_type,
            'Elecrtricity_number'=> $request->Elecrtricity_number,
            'gas_number'=> $request->gas_number,
            'water_number'=> $request->water_number,
            'El_current_reading'=>$request->El_current_reading,
            'gas_current_reading'=>$request->gas_current_reading,
            'El_current_reading'=>$request->El_current_reading,
            'water_current_reading'=>$request->water_current_reading,
            'El_current_reading'=>$request->El_current_reading,
            'status'=>$request->status,
        ]);
        return redirect()->back();
    }
     public function destroy($id)
     {
        try 
        {
            Units::destroy($id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

     }

}
