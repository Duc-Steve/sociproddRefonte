<?php

namespace App\Mail\ComiteMail\UtilisateurMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nomPrenom; // Déclaration de la variable pour le nom et prénom
    public $motDePasseGenerer; // Déclaration de la variable pour le mot de passe généré
    public $confirmationUrl; // Déclaration de la variable pour le lien de confirmation

    /**
     * Crée une nouvelle instance du message.
     *
     * @param string $nomPrenom
     * @param string $motDePasseGenerer
     * @param string $confirmationUrl
     */
    public function __construct($nomPrenom, $motDePasseGenerer, $confirmationUrl)
    {
        $this->nomPrenom = $nomPrenom; // Assignation du nom et prénom à la variable
        $this->motDePasseGenerer = $motDePasseGenerer; // Assignation du mot de passe généré à la variable
        $this->confirmationUrl = $confirmationUrl; // Assignation du lien de confirmation à la variable
    }

    /**
     * Obtient l'enveloppe du message.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail de Confirmation', // Sujet de l'email
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
            markdown: 'emails.comite_mail.utilisateur_mail.confirmation_mail', // Vue markdown de l'email
            with: [
                'nomPrenom' => $this->nomPrenom, // Passe la variable nom et prénom à la vue
                'motDePasseGenerer' => $this->motDePasseGenerer, // Passe la variable mot de passe généré à la vue
                'confirmationUrl' => $this->confirmationUrl, // Passe le lien de confirmation à la vue
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
