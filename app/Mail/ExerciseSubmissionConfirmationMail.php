<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExerciseSubmissionConfirmationMail extends Mailable
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
            subject: 'Recebemos com Sucesso o Relatório da Atividade Prática',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.exercise-submission-confirmation',
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
