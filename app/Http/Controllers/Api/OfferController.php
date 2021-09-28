<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Http\Requests\StatusRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;
use App\Models\Project;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(Request $request, Project $project)
    {
        $offers = Offer::where('project_id', $project->id);

        $status = $request->get('status_id');
        $fromDate = $request->get('from_date');
        $toDate = $request->get('to_date');

        if (isset($status)) {
            $offers->where('status_id', $status);
        }

        if (isset($fromDate)) {
            $offers->where('created_at', '>=', $fromDate);
        }

        if (isset($toDate)) {
            $offers->where('created_at', '<=', $toDate);
        }

        return OfferResource::collection($offers->paginate(10));
    }

    public function store(OfferRequest $request)
    {
        $createdOffer = Offer::create($request->validated());

        return new OfferResource($createdOffer);
    }

    public function update(StatusRequest $request, Offer $offer)
    {
        $offer->update($request->validated());

        return new OfferResource($offer);
    }
}
