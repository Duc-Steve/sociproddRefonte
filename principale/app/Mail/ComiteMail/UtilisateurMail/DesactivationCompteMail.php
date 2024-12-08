<?php

namespace App\Mail\ComiteMail\UtilisateurMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DesactivationCompteMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $nomPrenom; // Déclaration de la variable pour le nom et prénom

     /**
     * Crée une nouvelle instance du message.
     *
     * @param string $nomPrenom
     */
    public function __construct($nomPrenom)
    {
        $this->nomPrenom = $nomPrenom; // Assignation du nom et prénom à la variable
    }

    /**
     * Obtient l'enveloppe du message.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Désactivation du compte', // Sujet de l'email
        );
    }

    /**
     * Obtient la définition du contenu du message.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.comite_mail.utilisateur_mail.desactivation_compte_mail', // Vue markdown de l'email
            with: [
                'nomPrenom' => $this->nomPrenom, // Passe la variable nom et prénom à la vue
            ],
        );
    }

    /**
     * Obtient les pièces jointes pour le message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
