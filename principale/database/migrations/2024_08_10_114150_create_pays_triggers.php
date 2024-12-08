<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Créer le trigger après mise à jour pour la table pays
        DB::unprepared('
            CREATE TRIGGER after_pays_update
            AFTER UPDATE ON pays
            FOR EACH ROW
            BEGIN
                INSERT INTO logs (id_log, action, table_name, record_id, old_data, new_data, action_date)
                VALUES (
                    UUID(),  -- Génère un UUID pour chaque enregistrement
                    "UPDATE",
                    "pays",
                    OLD.id_pays,
                    JSON_OBJECT( 
                        "nom_url", OLD.nom_url,
                        "nom_normale", OLD.nom_normale,
                        "code_pays", OLD.code_pays,
                        "utilisateur_id", OLD.utilisateur_id,
                        "statut_pays", OLD.statut_pays
                    ),
                    JSON_OBJECT(
                        "nom_url", NEW.nom_url,
                        "nom_normale", NEW.nom_normale,
                        "code_pays", NEW.code_pays,
                        "utilisateur_id", NEW.utilisateur_id,
                        "statut_pays", NEW.statut_pays
                    ),
                    NOW()
                );
            END
        ');

        // Créer le trigger après suppression pour la table pays
        DB::unprepared('
            CREATE TRIGGER after_pays_delete
            AFTER DELETE ON pays
            FOR EACH ROW
            BEGIN
                INSERT INTO logs (id_log, action, table_name, record_id, old_data, action_date)
                VALUES (
                    UUID(),  -- Génère un UUID pour chaque enregistrement
                    "DELETE",
                    "pays",
                    OLD.id_pays,
                    JSON_OBJECT(
                        "nom_url", OLD.nom_url,
                        "nom_normale", OLD.nom_normale,
                        "code_pays", OLD.code_pays,
                        "utilisateur_id", OLD.utilisateur_id,
                        "statut_pays", OLD.statut_pays
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
            DROP TRIGGER IF EXISTS after_pays_update;
            DROP TRIGGER IF EXISTS after_pays_delete;
        ');
    }
};
