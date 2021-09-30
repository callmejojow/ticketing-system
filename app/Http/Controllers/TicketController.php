<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;


class TicketController extends Controller
{


    public function create()
    {
        
        return view('tickets.create');
    }

    public function show(Ticket $ticket)
    {

        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {

        return view('tickets.edit', compact('ticket'));
    }

    public function index()
    {
        $index = Ticket::paginate(10);
        return view('tickets.index',['tickets' => $index]);
    }




    public function store(Ticket $ticket, Request $request)
    {
         $ticket = Ticket::create($request->except('_token'));

         $request->validate(
            ['user_id' => 'required',
             'manager_id' => 'nullable',
             'location_id' => 'nullable',
             'team_id' => 'nullable',

             'status' => 'required',
             'priority' => 'required',
             'img_url' => 'nullable',

             'description' => 'required|min:21|max:1000',
             'comment' => 'nullable|min:7|max:1000',
             'solution' => 'nullable|min:7|max:1000',

            ]);

         foreach ($request->input('attachments', []) as $file) {
            $ticket->addMedia(storage_path('/' . $file))->toMediaCollection('attachments');
        }

         return redirect()->route('tickets.index')
        ->with('success','您的报告单已发送。');
    }


    public function update(Ticket $ticket, Request $request)
    {

        $ticket->update($request->all());

        return redirect()->route('tickets.show', $ticket)
        ->with('success','您的报告单信息已更新。');
    }

    public function delete(Ticket $ticket)
    {
      $ticket->delete();

      return redirect()->route('tickets.index')->with('success','您所选的报告单已删除。');
    }
}
