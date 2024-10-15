<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InvestmentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Investment Plans',
            'plans' => Investment::all()
        ];

        return view('admin.plans.index')->with($data);
    }

    public function store(Request $request, int $id = 0)
    {
        $validator = Validator::make($request->all(), [
            'plan_name' => ['required', 'string'],
            'minimum' => ['required', 'numeric'],
            'maximum' => ['required', 'numeric'],
            'percentage' => ['required', 'numeric'],
            'capital_return' => ['required', 'string', 'in:on,off'],
            'duration' => ['required', 'numeric'],
            'unit' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        if ($id == 0) {
            try {

                DB::beginTransaction();

                $investment = new Investment();
                $investment->plan_name = $request->plan_name;
                $investment->minimum = $request->minimum;
                $investment->maximum = $request->maximum;
                $investment->percentage = $request->percentage;
                $investment->capital_return = $request->capital_return;
                $investment->duration = $request->duration;
                $investment->unit = $request->unit;
                $investment->save();

                DB::commit();

                return redirect(route('admin.investment.all'))->with(['success' => ucwords($request->plan_name) . " plan created sucessfully"]);
            } catch (\Exception $e) {

                DB::rollBack();

                return redirect(route('admin.investment.all'))->with(['error' => $e->getMessage()]);
            }
        } else {


            try {

                DB::beginTransaction();

                $investment = Investment::findOrFail($id);


                $investment->plan_name = $request->plan_name;
                $investment->minimum = $request->minimum;
                $investment->maximum = $request->maximum;
                $investment->percentage = $request->percentage;
                $investment->capital_return = $request->capital_return;
                $investment->duration = $request->duration;
                $investment->unit = $request->unit;
                $investment->save();


                DB::commit();

                return redirect(route('admin.investment.all'))->with(['success' => ucwords($request->plan_name) . " plan updated sucessfully"]);
            } catch (\Exception $e) {

                DB::rollBack();

                return redirect(route('admin.investment.all'))->with(['error' => $e->getMessage()]);
            }
        }
    }

    public function delete(int $id)
    {
        $plan = Investment::findOrFail($id);
        $name = $plan->plan_name;

        try {
            DB::beginTransaction();
            $plan->delete();
            DB::commit();

            return redirect(route('admin.investment.all'))->with(['success' => ucwords($name) . " plan deleted successfully"]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(route('admin.investment.all'))->with(['error' => $e->getMessage()]);
        }
    }
}
