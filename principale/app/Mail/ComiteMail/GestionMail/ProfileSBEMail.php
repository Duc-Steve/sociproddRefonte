<?php

namespace App\Mail\ComiteMail\GestionMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProfileSBEMail extends Mailable
{
    use Queueable, SerializesModels;

    // Variables pour stocker le nom/prénom et l'URL de gestion du profil
    protected $nomPrenom;
    protected $confirmationUrl;

    /**
     * Crée une nouvelle instance de message.
     *
     * @param string $nomPrenom Le nom complet du destinataire
     * @param string $confirmationUrl L'URL de gestion du profil
     */
    public function __construct($nomPrenom, $confirmationUrl)
    {
        $this->nomPrenom = $nomPrenom;
        $this->confirmationUrl = $confirmationUrl;
    }

    /**
     * Définir l'enveloppe du message.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Lien de gestion de votre profil',
        );
    }

    /**
     * Définir le contenu du message.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.comite_mail.gestion_mail.profile_sbe_mail',
            with: [
                'nomPrenom' => $this->nomPrenom,
                'confirmationUrl' => $this->confirmationUrl,
            ],
        );
    }

    /**
     * Définir les pièces jointes pour le message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
