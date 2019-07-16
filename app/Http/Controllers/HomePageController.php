<?php

namespace App\Http\Controllers;

use Mail;
use Validator;
use App\Models\Event;
use App\Models\Organiser;
use Illuminate\Http\Request;

class HomePageController extends Controller //LU custom class
{
    /**
     * Show the organiser events page
     *
     * @param Request $request
     * @param $organiser_id
     * @return mixed
     */

    public function showRankPage()
    {
        return view('Public.Custom.RankHomePage');
    }


    public function showRiderPage()
    {
        return view('Public.Custom.RiderHomePage');
    }

        /**
         * Sends a message to the site admin
         *
         * @param Request $request
         * @return mixed
         */
    public function ContactUS(Request $request)
    {
        $rules = [
            'name'    => 'required',
            'email'   => ['required', 'email'],
            'message' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status'   => 'error',
                'messages' => $validator->messages()->toArray(),
            ]);
        }

        $data = [
            'sender_name'     => $request->get('name'),
            'sender_email'    => $request->get('email'),
            'message_content' => strip_tags($request->get('message')),
        ];

        Mail::send('Emails.contactUsMessage', $data, function ($message) use ($data) {
            $message->to(config('attendize.incoming_email'), config('attendize.outgoing_email_name'))
                ->from(config('attendize.outgoing_email_noreply'), $data['sender_name'])
                ->replyTo($data['sender_email'], $data['sender_name'])
                ->subject(trans("Email.user_message"));
        });

        return response()->json([
            'status'  => 'success',
            'message' => trans("Controllers.message_successfully_sent"),
        ]);
    }
}
