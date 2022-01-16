<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Record;

class RecordCreate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $record;
    
    public function __construct(Record $record)
    {
        $this->record = $record;
    }

}
