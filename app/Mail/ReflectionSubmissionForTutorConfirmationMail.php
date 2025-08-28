<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReflectionSubmissionForTutorConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $submissionReflection;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $submissionReflection)
    {
        $this->user = $user;
        $this->submissionReflection = $submissionReflection;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Seu Fichamendo foi emcamnhado pelo Tutor',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.reflection-submission-tutor-confirmation',
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
