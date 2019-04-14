<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'description'=>$this->details,
            'stock_avaliable'=>$this->stock==0?'Stock Not Avaiable':$this->stock,
            'rating'=>$this->reviews->count('star')>0?$this->reviews->sum('star'):'No Rating Yet ',
            'href' =>[
                    'reviews' =>route('review.index',[$this->id]),
            ]
        ];
    }
}
