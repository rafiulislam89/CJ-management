<?php

namespace App\Http\Controllers\SupportTeam;


use App\Http\Controllers\Controller;
use App\Models\NoticeBoard;
use Illuminate\Http\Request;
use App\Helpers\Qs;

class NoticeBoardController extends Controller
{
    public function index()
    {
        $notices = NoticeBoard::all();
        return view('pages.support_team.Notice_board.list',['notices'=>$notices]);
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'priority' => $request->priority,
            'status' => $request->status,
            'user_id' => auth()->user()->id,
        ];
        NoticeBoard::insert($data);
        return Qs::storeOk('notice_board.index');
    }

    public function edit($id)
    {

        $notice = NoticeBoard::findOrFail($id);
        return view('pages.support_team.Notice_board.edit', compact('notice'));
    }


    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'priority' => 'required|in:important,normal',
            'status' => 'required|in:active,inactive',
        ]);
        $notice = NoticeBoard::findOrFail($id);
        $notice->update($validated);

        return Qs::updateOk('notice_board.index');
    }




    public function destroy($id)
    {
        $notice = NoticeBoard::find($id);
        $notice->delete();

        return QS::DeleteOk('notice_board.index');
    }
}
