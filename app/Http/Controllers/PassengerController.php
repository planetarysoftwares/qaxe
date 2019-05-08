<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organiser;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Log;
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
        $organiser = Organiser::all(); //TODO:LU Investigate a better way

        $data = [
            'organisers' => $organiser,
        ];

        return view('Public.Custom.Ranks', $data);
    }

    public function showRankQueues(Request $request, $organiser_id)
    {
        $organiser = Organiser::scope()->findOrfail($organiser_id);

        $allowed_sorts = ['created_at', 'start_date', 'end_date', 'title'];

        $searchQuery = $request->get('q');
        $sort_by = (in_array($request->get('sort_by'), $allowed_sorts) ? $request->get('sort_by') : 'start_date');

        $events = $searchQuery
            ? Event::scope()->where('title', 'like', '%' . $searchQuery . '%')->orderBy($sort_by,
                'desc')->where('organiser_id', '=', $organiser_id)->paginate(12)
            : Event::scope()->where('organiser_id', '=', $organiser_id)->orderBy($sort_by, 'desc')->paginate(12);

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

    public function searchRankQueues(Request $request)
    {
       $organiser_id = $request->organiser_id;
       $organiser = Organiser::findOrFail($organiser_id);

        $data = [
            'tickets' => $organiser->events()->orderBy('created_at', 'desc')->get(),
        ];

        return Response($data);

    }

    public function showQueuePage(Request $request)
    {
           $event_id = $request->input('event_id');
        Log::info($event_id);
        $event = Event::findOrFail($event_id);

        $data = [
            'event'       => $event,
            'tickets'     => $event->tickets()->where('is_hidden', 0)->orderBy('sort_order', 'asc')->get(),
            'is_embedded' => '1',
        ];

        return view('Public.ViewEvent.Embedded.EventPage', $data);
    }

}
