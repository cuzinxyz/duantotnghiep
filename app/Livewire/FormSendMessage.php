<?php

namespace App\Livewire;

use App\Models\SendMessage;
use Livewire\Component;

class FormSendMessage extends Component
{
  public $user_name;
  public $email;
  public $phone_number;
  public $message;

  public function createMessage(){
    $send_message = new SendMessage();
    $send_message->user_name = $this->user_name;
    $send_message->email = $this->email;
    $send_message->phone_number = $this->phone_number;
    $send_message->message = $this->message;
    $send_message->save();
    $this->cleanForm();
  }
  public function cleanForm(){
    $this->user_name = '';
    $this->email = '';
    $this->phone_number = '';
    $this->message = '';
  }
  public function deleteMessage($id){
    SendMessage::findOrFail($id)->delete();
  }
    public function render()
    {
        return view('livewire.form-send-message',[
          'send_message'
          ]);
    }
}
