<?php

namespace App\Mail\ComiteMail\UtilisateurMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TentativeConnexionMail extends Mailable
{
    use Queueable, SerializesModels;
   
    public $nomPrenom;          // Déclaration de la variable pour le nom et prénom
    public $ouiSecuriteUrl;      // Déclaration de la variable de l'URL oui de sécurité
    public $nonSecuriteUrl;      // Déclaration de la variable de l'URL non de sécurité
    public $AdresseIp;           // Déclaration de la variable pour l'adresse IP
    public $typeNavigateur;      // Déclaration de la variable pour le type de navigateur
    public $typeAppareil;        // Déclaration de la variable pour le type d'appareil
    public $typeSysteme;         // Déclaration de la variable pour le type de système d'exploitation
    public $VersionSysteme;      // Déclaration de la variable pour la version du système d'exploitation
    
    /**
     * Crée une nouvelle instance du message.
     *
     * @param string $nomPrenom
     * @param string $ouiSecuriteUrl
     * @param string $nonSecuriteUrl
     * @param string $AdresseIp
     * @param string $typeNavigateur
     * @param string $typeAppareil
     * @param string $typeSysteme
     * @param string $VersionSysteme
     */
    public function __construct($nomPrenom, $ouiSecuriteUrl, $nonSecuriteUrl, $AdresseIp, $typeNavigateur, $typeAppareil, $typeSysteme, $VersionSysteme)
    {
        $this->nomPrenom = $nomPrenom;                  // Assignation du nom et prénom à la variable
        $this->ouiSecuriteUrl = $ouiSecuriteUrl;        // Assignation de l'URL oui de sécurité
        $this->nonSecuriteUrl = $nonSecuriteUrl;        // Assignation de l'URL non de sécurité
        $this->AdresseIp = $AdresseIp;                  // Assignation de l'adresse IP
        $this->typeNavigateur = $typeNavigateur;        // Assignation du type de navigateur
        $this->typeAppareil = $typeAppareil;            // Assignation du type d'appareil
        $this->typeSysteme = $typeSysteme;              // Assignation du type de système d'exploitation
        $this->VersionSysteme = $VersionSysteme;        // Assignation de la version du système d'exploitation
    }

    /**
     * Obtient l'enveloppe du message.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Avis de sécurité SOCIPRODD', // Sujet de l'email
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
            markdown: 'emails.comite_mail.utilisateur_mail.tentative_connexion_mail', // Vue markdown de l'email
            with: [
                'nomPrenom' => $this->nomPrenom,            // Passe la variable nom et prénom à la vue
                'ouiSecuriteUrl' => $this->ouiSecuriteUrl,  // Passe la variable de l'URL oui de sécurité à la vue
                'nonSecuriteUrl' => $this->nonSecuriteUrl,  // Passe la variable de l'URL non de sécurité à la vue
                'AdresseIp' => $this->AdresseIp,            // Passe la variable de l'adresse IP à la vue
                'typeNavigateur' => $this->typeNavigateur,  // Passe la variable du type de navigateur à la vue
                'typeAppareil' => $this->typeAppareil,      // Passe la variable du type d'appareil à la vue
                'typeSysteme' => $this->typeSysteme,        // Passe la variable du type de système d'exploitation à la vue
                'VersionSysteme' => $this->VersionSysteme,  // Passe la variable de la version du système d'exploitation à la vue
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
