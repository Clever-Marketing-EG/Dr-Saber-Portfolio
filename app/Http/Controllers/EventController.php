<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

define('RESULTS_PER_PAGE', 21);


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $events = Event::paginate(21);
        return view('events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        //TODO
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return View
     */
    public function show(Event $event): View
    {
        return view('events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Response
     */
    public function edit(Event $event): Response
    {
        //TODO
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Event $event
     * @return Response
     */
    public function update(Request $request, Event $event): Response
    {
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return Response
     */
    public function destroy(Event $event): Response
    {
        //TODO
    }

    public function search(Request $request)
    {
        $events = Event::query()
            ->where('title', 'LIKE', "%{$request['term']}%")
            ->where('title_ar', 'LIKE', "%{$request['term']}%")
            ->where('content', 'LIKE', "%{$request['term']}%")
            ->where('content', 'LIKE', "%{$request['term']}%")
            ->paginate(21);

        return view('main.events.index', ['events' => $events]);
    }
}
