<?php

namespace App\Http\Controllers;

use App\Mail\NewMessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a list of messages.
     *
     * @return Array
     */
    public function index()
    {
        $message = Message::all()->toArray();
        return array_reverse($message);
    }

    /**
     * Store a newly created message in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Json
     */
    public function store(Request $request)
    {
        $request['message'] = json_decode($request->data, true);

        $request->validate([
            'message.name' => 'required',
            'message.email' => 'required|email',
            'message.phone' => 'required|digits_between:10,11',
            'message.message' => 'required',
            'file' => 'required|file|max:500|mimes:pdf,doc,docx,odt,txt',
        ]);

        $current_timestamp = Carbon::now()->timestamp;
        $file = $request->file->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME) . '-' . $current_timestamp . '.' . pathinfo($file, PATHINFO_EXTENSION);
        $request->file->storeAs('files', $filename);
        $file_path = storage_path('app/files/' . $filename);

        $message = new Message([
            'name' => $request['message']['name'],
            'email' => $request['message']['email'],
            'phone' => $request['message']['phone'],
            'message' => $request['message']['message'],
            'attachment' => $file_path
        ]);

        $message->save();



        return response()->json('Message successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified message.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return response()->json($message);
    }

    /**
     * Update the specified message in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $message->update($request->all());
        return response()->json('Message successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        if ($message) {
            $message->delete();
        }
        return response()->json('Message successfully deleted');
    }
}
