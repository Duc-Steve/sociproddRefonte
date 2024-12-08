<?php

namespace App\Mail\SiteMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsltetterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $recipientEmail;              // e-mail

    /**
     * Crée une nouvelle instance du message.
     *
     * @param string $recipientEmail
     */
    public function __construct($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;
    }

    /**
     * Récupère l'enveloppe du message.
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        // Définit le sujet de l'e-mail
        return new Envelope(
            subject: 'Inscription newsletter',
        );
    }

    /**
     * Définition du contenu du message.
     *
     * @return Content
     */
    public function content(): Content
    {
        // Définit le contenu du message en utilisant une vue markdown
        return new Content(
            markdown: 'emails.site_mail.newsletter_mail',
            with: [
                'recipientEmail' => $this->recipientEmail,  // Transmet le mail à la vue
            ],
        );
    }

    /**
     * Récupère les pièces jointes du message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // Retourne un tableau vide, car il n'y a pas de pièces jointes pour cet e-mail
        return [];
    }
}
