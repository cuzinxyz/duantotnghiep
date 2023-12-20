<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailSalon extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thông báo về yêu cầu mở salon của bạn',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if ($this->data->status == 1) {
            $reason = 'Chúc mừng bạn, yêu cầu mở salon của bạn đã được chúng tôi phê duyệt thành công! Cảm ơn sự tin tưởng và ủng hộ của bạn với DRIVCO.';
        } elseif($this->data->status == 2) {
            $reason = 'Xin lỗi bạn, yêu cầu mở salon của bạn đã không được chúng tôi phê duyệt. Vì lý do: ' . $this->data->reason .
                ' .Cảm ơn sự tin tưởng và ủng hộ của bạn với DRIVCO.';
        }else {
            $reason = 'Chào bạn, salon của bạn đã bị khóa. Vì lý do: ' . $this->data->reason .
                ' .Cảm ơn sự tin tưởng và ủng hộ của bạn với DRIVCO.';
        }

        return new Content(
            view: 'mail.mail-demnad',
            with: [
                'reason' => $reason
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
