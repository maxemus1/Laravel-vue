<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'products_id' => $this->products_id,
            'user_id' => $this->user_id,
            'prise' => $this->prise,
            'status' => $this->status,
            'date_orders' => $this->date_orders,
        ];
    }
}
