<?php
namespace durgesh\Events;
use durgesh\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StudentAdded extends Event {
   use SerializesModels;
   public $name;
  
   public function __construct($name) {
      $this->name = $name;
   }
   public function broadcastOn() {
      return [];
   }
}