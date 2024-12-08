<?php

namespace App\Mail\ComiteMail\UtilisateurMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ChangeMotPasseMail extends Mailable
{
    use Queueable, SerializesModels;

     public $nomPrenom;
    public $urlPersonnelleMotPasse;

    /**
     * Crée une nouvelle instance de message.
     *
     * @param string $nomPrenom Le nom et prénom du destinataire
     * @param string $urlPersonnelleMotPasse L'URL personnalisée pour changer le mot de passe
     */
    public function __construct($nomPrenom, $urlPersonnelleMotPasse)
    {
        // Initialiser les propriétés avec les données nécessaires
        $this->nomPrenom = $nomPrenom;
        $this->urlPersonnelleMotPasse = $urlPersonnelleMotPasse;
    }

    /**
     * Obtenir l'enveloppe du message.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // Définir l'objet du mail
            subject: 'Changement de mot de passe',
        );
    }

    /**
     * Obtenir la définition du contenu du message.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content(): Content
    {
        return new Content(
            // Utiliser un template Markdown pour le contenu de l'email
            markdown: 'emails.comite_mail.utilisateur_mail.change_mot_passe_mail',
            with: [
                'nomPrenom' => $this->nomPrenom,
                'urlPersonnelleMotPasse' => $this->urlPersonnelleMotPasse,
            ],
        );
    }

    /**
     * Obtenir les pièces jointes du message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
