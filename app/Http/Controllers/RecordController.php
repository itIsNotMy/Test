<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Http\Requests\RecordRequest;
use App\Events\RecordCreate;
use App\Exports\InvoicesExport;
use Carbon\Carbon;
use Excel;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::with('owner')->latest()->cursorPaginate(5);

        return view('record', compact('records'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(RecordRequest $request)
    {
        $record = Record::create($request->validated());

        event(new RecordCreate($record));

        return redirect(route('record.index'));
    }

    public function edit(Record $record)
    {
        $this->authorize('update', $record);

        return view('edit', compact('record'));
    }

    public function update(Record $record, RecordRequest $request)
    {
        $record->update($request->validated());

        return redirect(route('record.index'));
    }

    public function destroy(Record $record)
    {
        $record->delete();

        return redirect(route('record.index'));
    }
    
    public function formexport(Record $record) 
    {
        $this->authorize('formexport');

        return view('export');
    }
    
    public function export(Request $request)
    {
        return Excel::download(new InvoicesExport($request->from, $request->to), 'report.xlsx');
    }
}
