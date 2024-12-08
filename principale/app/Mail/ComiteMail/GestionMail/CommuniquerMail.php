<?php

namespace App\Mail\ComiteMail\GestionMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CommuniquerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sujet;              // Sujet de l'e-mail
    public $messageContent;     // Contenu du message
    public $signature;          // Signature de l'e-mail

    /**
     * Crée une nouvelle instance du message.
     *
     * @param string $sujet
     * @param string $messageContent
     * @param string $signature
     */
    public function __construct($sujet, $messageContent, $signature)
    {
        $this->sujet = $sujet;
        $this->messageContent = $messageContent;
        $this->signature = $signature;
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
            subject: $this->sujet,
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
            markdown: 'emails.comite_mail.gestion_mail.communiquer_mail',
            with: [
                'messageContent' => $this->messageContent,  // Transmet le contenu du message à la vue
                'signature' => $this->signature,            // Transmet la signature à la vue
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
