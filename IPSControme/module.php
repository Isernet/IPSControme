<?
    // Klassendefinition
    class IPSControme extends IPSModule {
        /**
        * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
        *
        * CON_MeineErsteEigeneFunktion($id);
        *
        */
        public function TestID() {
            echo $this->InstanceID;
        }
    }
?>