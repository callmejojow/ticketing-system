<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Show the page of creating a ticket.

    public function create()
    {
        return view('tickets.create');
    }

    public function show(Ticket $ticket)
    {

        return view('tickets.show', compact('ticket'));
    }

    public function index()
    {
        $index = Ticket::paginate(5);
        return view('tickets',['tickets' => $index]);
    }


    // Save and submit the ticket.

    public function store(Ticket $ticket)
    {
         $ticket = Ticket::create($request->all());

         foreach ($request->input('attachments', []) as $file) {
            $ticket->addMedia(storage_path('/' . $file))->toMediaCollection('attachments');
        }

         return redirect()->route('tickets.index')
        ->with(['message'=>'Your request is sent successfully.']);
    }


    public function update(Ticket $ticket, Request $request)
    {

        $ticket->update($request->all());

        return view('tickets.show', compact('ticket'))
        ->with(['message'=>'Your request is updated successfully.']);
    }

    public function delete(Ticket $ticket)
    {
      $ticket->delete();

      return redirect()->route('tickets.index')->with(['message'=>'Your request is deleted successfully.']);
    }
}
