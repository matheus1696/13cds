<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WorkEvaluatedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $studentName;
    public $workTitle;
    public $evaluatorName;
    public $evaluation;

    /**
     * Create a new message instance.
     */
    public function __construct($studentName, $workTitle, $evaluation, $evaluatorName)
    {
        $this->studentName = $studentName;
        $this->workTitle = $workTitle;
        $this->evaluatorName = $evaluatorName;
        $this->evaluation = $evaluation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Seu trabalho foi avaliado',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.work-evaluated',
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
