<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
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
            'id'          => $this -> id,
            'description' => $this -> description,
            'project'     => $this -> project_id,
            'status_id'   => new StatusResource($this -> status),
            'created_at'  => $this -> created_at,
        ];
    }
}
