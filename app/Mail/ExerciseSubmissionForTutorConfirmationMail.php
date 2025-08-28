<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExerciseSubmissionForTutorConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $submissionExercise;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $submissionExercise)
    {
        $this->user = $user;
        $this->submissionExercise = $submissionExercise;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Seu Relatório da Atividade Prática foi Encaminhado pelo Tutor',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.exercise-submission-tutor-confirmation',
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
