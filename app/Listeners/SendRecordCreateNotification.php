<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\RecordMailCreate;
use App\Events\RecordCreate;

class SendRecordCreateNotification
{
    public function handle(RecordCreate $event)
    {
        \Mail::to('qwe@gmail.ru')->send(
            new RecordMailCreate($event->record)
        );
    }
}
