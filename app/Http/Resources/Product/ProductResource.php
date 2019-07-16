<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [

            'name' => $this->name,

            'description' => $this->detail,

            'price' => $this->price,

            'stock' => $this->stock->count() > 0 ? $this->stock : 
                        'Out of stock',

            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),1)
                        : 'Item has no rating yet!',

            'href' => [
                'reviews' => route('reviews.index',$this->id),
            ],

        ];
    }
}
