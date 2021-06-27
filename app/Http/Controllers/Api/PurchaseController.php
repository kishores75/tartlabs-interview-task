<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Purchase;
use App\Models\User;
use App\Http\Resources\Purchase as PurchaseResource;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class PurchaseController extends BaseController
{

    public function index()
    {
        $user = auth()->user();
        $user_id = $user->id;
        $role_id = DB::table('model_has_roles')->select('role_id')->where('model_id', $user_id)->first();
        if($role_id->role_id == '1'){
            $purchases = Purchase::all();
            if(count($purchases))
                return $this->sendResponse(PurchaseResource::collection($purchases), 'Your Purchases has been retrieved successfully.');
            return $this->sendResponse('No Data', 'Right now there is no data to show.');
        }else{
            $purchase = User::find($user_id);
            $purchases = $purchase->getRelations()->get();
            if(count($purchases))
                return $this->sendResponse(PurchaseResource::collection($purchases), 'Your Purchases has been retrieved successfully.');
            return $this->sendResponse('No Data', 'Right now there is no data to show.');
        }
    }
}