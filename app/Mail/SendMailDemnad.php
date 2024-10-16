<?php

namespace App\Mail;

use App\Models\Car;
use App\Models\Demnad;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailDemnad extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public Demnad $demnad,
        public User $user
    ) {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        return new Envelope(
            subject: 'Thông báo về bài đăng tin cần mua xe của bạn',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $cars = Car::inRandomOrder()->limit(2)->get();

        return new Content(
            view: 'mail.mail-demnad',
            with: [
                'cars' => $cars,
            ]

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
