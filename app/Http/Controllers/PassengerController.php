<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Event;
use App\Models\Organiser;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Show the organiser events page
     *
     * @param Request $request
     * @param $organiser_id
     * @return mixed
     */
    public function showRanks()
    {
        $organiser = Organiser::select('id', 'name')->orderBy('name')->get();//TODO:LU Investigate a better way

        $data = [
            'organisers' => $organiser,
        ];

        return view('Public.Custom.Ranks', $data);
    }

    public function showRankDestinations(Request $request, $organiser_id)
    {
        $organiser = Organiser::scope()->findOrfail($organiser_id);

        $allowed_sorts = ['created_at', 'start_date', 'end_date', 'title'];

        $searchQuery = $request->get('q');
        $sort_by = (in_array($request->get('sort_by'), $allowed_sorts) ? $request->get('sort_by') : 'start_date');

        $events = $searchQuery
            ? Event::scope()->where('title', 'like', '%' . $searchQuery . '%')->orderBy($sort_by,
                'desc')->where('organiser_id', '=', $organiser_id)
            : Event::scope()->where('organiser_id', '=', $organiser_id)->orderBy($sort_by, 'asc');

        $data = [
            'events'    => $events,
            'organiser' => $organiser,
            'search'    => [
                'q'        => $searchQuery ? $searchQuery : '',
                'sort_by'  => $request->get('sort_by') ? $request->get('sort_by') : '',
                'showPast' => $request->get('past'),
            ],
        ];

         return Response($data);
    }

    public function searchRankDestinations(Request $request)
    {

       $rules = [
           'organiser_id' => ['required', 'numeric', 'min:0'],
       ];

       $validator = Validator::make($request->all(), $rules);

       if ($validator->fails()) {
           return response()->json([
               'status'   => 'error',
               'messages' => $validator->messages()->toArray(),
           ]);
       }

       $organiser_id = $request->organiser_id;
       $organiser = Organiser::findOrFail($organiser_id);

        $data = [
            'tickets' => $organiser->events()->orderBy('title', 'asc')->get(),
        ];

        return Response($data);

    }

    public function showDestinationPage(Request $request)
    {
        $rules = [
           'event_id' => ['required', 'numeric', 'min:0'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
           return response()->json([
               'status'   => 'error',
               'messages' => $validator->messages()->toArray(),
           ]);
        }

        $event_id = $request->input('event_id');
        $event = Event::findOrFail($event_id);

        $data = [
            'event'       => $event,
            'tickets'     => $event->tickets()->where('is_hidden', 0)->orderBy('sort_order', 'asc')->get(),
            'is_embedded' => '1',
        ];

        return view('Public.ViewEvent.Embedded.EventPage', $data);
    }

}
