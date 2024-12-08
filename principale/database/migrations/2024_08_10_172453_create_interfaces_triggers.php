<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Créer le trigger après mise à jour pour la table pays
        DB::unprepared('

            CREATE TRIGGER after_interfaces_update
            AFTER UPDATE ON interfaces
            FOR EACH ROW
            BEGIN
                INSERT INTO logs (id_log, action, table_name, record_id, old_data, new_data, action_date)
                VALUES (
                    UUID(), 
                    "UPDATE",
                    "interfaces",
                    OLD.id_interface,
                    JSON_OBJECT(
                        "video", OLD.video,
                        "image_dynamique", OLD.image_dynamique,
                        "image_statique", OLD.image_statique,
                        "projet", OLD.projet,
                        "actualite", OLD.actualite,
                        "podcast", OLD.podcast,
                        "reportage", OLD.reportage,
                        "membre_executif", OLD.membre_executif,
                        "coordonnee", OLD.coordonnee,
                        "contact", OLD.contact,
                        "newsletter", OLD.newsletter,
                        "commentaire", OLD.commentaire,
                        "pays_id", OLD.pays_id,
                        "utilisateur_id", OLD.utilisateur_id
                    ),
                    JSON_OBJECT(
                        "video", NEW.video,
                        "image_dynamique", NEW.image_dynamique,
                        "image_statique", NEW.image_statique,
                        "projet", NEW.projet,
                        "actualite", NEW.actualite,
                        "podcast", NEW.podcast,
                        "reportage", NEW.reportage,
                        "membre_executif", NEW.membre_executif,
                        "coordonnee", NEW.coordonnee,
                        "contact", NEW.contact,
                        "newsletter", NEW.newsletter,
                        "commentaire", NEW.commentaire,
                        "pays_id", NEW.pays_id,
                        "utilisateur_id", NEW.utilisateur_id
                    ),
                    NOW()
                );
            END 
        ');

        // Créer le trigger après suppression pour la table pays
        DB::unprepared('
           
            CREATE TRIGGER after_interfaces_delete
            AFTER DELETE ON interfaces
            FOR EACH ROW
            BEGIN
                INSERT INTO logs (id_log, action, table_name, record_id, old_data, action_date)
                VALUES (
                    UUID(), 
                    "DELETE",
                    "interfaces",
                    OLD.id_interface,
                    JSON_OBJECT(
                        "video", OLD.video,
                        "image_dynamique", OLD.image_dynamique,
                        "image_statique", OLD.image_statique,
                        "projet", OLD.projet,
                        "actualite", OLD.actualite,
                        "podcast", OLD.podcast,
                        "reportage", OLD.reportage,
                        "membre_executif", OLD.membre_executif,
                        "coordonnee", OLD.coordonnee,
                        "contact", OLD.contact,
                        "newsletter", OLD.newsletter,
                        "commentaire", OLD.commentaire,
                        "pays_id", OLD.pays_id,
                        "utilisateur_id", OLD.utilisateur_id
                    ),
                    NOW()
                );
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('
            DROP TRIGGER IF EXISTS after_interfaces_update;
            DROP TRIGGER IF EXISTS after_interfaces_delete;
        ');
    }
};
