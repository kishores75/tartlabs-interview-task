<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\User;
use App\Models\Product;
use App\Models\Service;

class Purchase extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_detail' => ($this->user_id) ? User::find($this->user_id)->getUserName()->get() : "",
            'service_detail' => ($this->service_id) ? Service::find($this->service_id)->getServiceName()->get() : "",
            'product_detail' => ($this->product_id) ? Product::find($this->product_id)->getProductName()->get() : "",
            'created_at' => $this->created_at->format('d-m-Y'),
            'updated_at' => $this->updated_at->format('d-m-Y'),
        ];
    }
}