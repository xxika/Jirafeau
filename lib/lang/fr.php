<?php
/*
 *  Jirafeau, your web file repository
 *  Copyright (C) 2013
 *  Jerome Jutteau <j.jutteau@gmail.com>
 *  Jimmy Beauvois <jimmy.beauvois@gmail.com>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$tr = array (
            /* index.php */
             'Jirafeau, your web file repository' => 'Jirafeau, votre dépot de fichiers',
             'Select a file' => 'Sélectionner un fichier à envoyer:',
             'Send' => 'Envoyer',
             'Uploading ...' => 'Envoi en cours ...',
             'One time download' => 'Téléchargement unique',
             'Password' => 'Mot de passe',
             'Time limit' => 'Limite de temps',
             'Maximum file size' => 'Taille maximale',
             'powered by Open-Source project Jirafeau' => 'Propulsé par le projet Open-Source Jirafeau',
             'Jirafeau Project' => 'Projet Jirafeau',
             'None' => 'Aucune',
             'One minute' => 'Une minute',
             'One hour' => 'Une heure',
             'One day' => 'Une journée',
             'One week' => 'Une semaine',
             'One month' => 'Un mois',
             'Upload password' => 'Mot de passe',
             'The file directory is not writable' => 'Le dossier \'file\' ne peut être écrit.',
             'The link directory is not writable' => 'Le dossier \'link\' ne peut être écrit.',
             'The async directory is not writable!' => 'Le dossier \'async\' ne peut être écrit.',
             'Installer script still present' => 'Le script d\'installation est toujours présent',
             'Please make sure to delete the installer script "install.php" before continuing.' => 'Merci de supprimer le fichier "install.php" avant de continuer.',
             'An error occurred.' => 'Une erreur s\'est produite',
             'File uploaded! Copy the following URL to get it' => 'Fichier envoyé! Le fichier sera accessible à l\'adresse suivante',
             'This file is valid until the following date' => 'Ce fichier est valable jusqu\'à la date suivante',
             'Keep the following URL to delete it at any moment' => 'Vous pouvez supprimer le fichier lorsque vous le désirez via l\'adresse suivante',
             /* f.php */
             'Download' => 'Télécharger',
             'Sorry, the requested file is not found' => 'Désolé, le fichier que vous demandez n\'existe pas ou n\'existe plus',
             'File not available.' => 'Fichier non disponible',
             'File has been deleted.' => 'Le fichier a été supprimé.',
             'The time limit of this file has expired.' => 'La limite de temps est dépassée.',
             'Password protection' => 'Protection par mot de passe',
             'Give the password of this file' => 'Donnez le mot de passe pour ce fichier',
             'Access denied' => 'Accès interdit',
             'You are about to download' => 'Vous êtes sur le point de télécharger',
             'By using our services, you accept of our' => 'En utilisant nos services, vous acceptez nos',
             'Term Of Service' => 'Conditions d\'utilisation',
             /* functions.php */
             'Internal error during file creation.' => 'Erreur interne lors la creation de fichier.',
             /* install.hpp */
             'This file was generated by the install process. You can edit it. Please see config.original.php to understand the configuration items.' => 'Ce fichier a été généré par le processus d\'installation. Vous pouvez l\'éditer. Merci de se référer à config.original.php pour comprendre les éléments de configuration.',
             'The following directory could not be created' => 'Le dossier suivant ne peut être créé',
             'You should create this directory by hand.' => 'Vous devriez creer manuelement ce dossier',
             'The following directory is not writable' => 'Le dossier suivant ne peut être créé',
             'You should give the write right to the web server on this directory.' => 'Vous devriez donner le droits d\'écriture à ce repertoire pour le rendre accessible par le serveur web.',
             'Here is a solution' => 'Une solution possible',
             'The local configuration file could not be created. Create a ' .
                '<code>lib/config.local.php</code> file and give the write ' .
                'right to the web server (preferred solution), or give the ' .
                'write right to the web server on the <code>lib</code> ' .
                'directory.' => 'Le fichier de configuration local ne peut être créé. Creez le fichier <code>lib/config.local.php</code> et donnez lui les droits d\'écriture par le serveur web (solution préférable) ou bien donnez les accès en écriture au dossier <code>lib</code>',
            'The local configuration is not writable by the web server. ' .
                'Give the write right to the web server on the ' .
                '<code>lib/config.local.php</code> file.' => 'Le fichier de configuration local ne peut être écrit. Donnez les droits d\'écriture au fichier <code>lib/config.local.php</code> par le serveur web.',
            'Installation of Jirafeau' => 'Installation de Jirafeau',
            'step' => 'étape',
            'out of' => 'sur',
            'Administration password' => 'Mot de passe d\'administration',
            'Clean unused blocks' => 'Nettoie les bloques inutilisés',
            'Finalisation' => 'Finalisation',
            'Jirafeau is setting the website according to the configuration you provided.' => 'Jirafeau se configure selon les paramêtres donnés',
            'Previous step' => 'Etape précedente',
            'Retry this step' => 'Ressayer cette étape',
            'Jirafeau is now fully operational' => 'Jirafeau est maintenant utilisable',
            'Information' => 'Information',
            'The base address of Jirafeau is the first part of the URL, until (and including) the last slash. For example: "http://www.example.com/". Do not forget the ending slash!'
                => 'L\'adresse d\'origine de Jirafeau est la première partie de l\'URL (slash de fin inclue). Par exemple: "http://www.exemple.com/". N\'oubliez pas le slash de fin !',
            'Base address' => 'Addresse d\'origine',
            'The data directory is where your files and information about your files will be stored. You should put it outside your web site, or at least restrict the access of this directory. Do not forget the ending slash!'
                => 'Le dossier "data" est là où seront stoqués les fichiers ainsi que leurs informations. Ce dossier ne devrait pas être accessible directement par l\'utilisateur. N\'oubliez pas le slash de fin !',
            'Data directory' => 'Dossier de stockage des données',
            'Jirafeau is internationalised. Choose a specific langage or choose Automatic (langage is provided by user\'s browser).'
                => 'Jirafeau supporte plusieurs languages. Choisissez un langage spécific ou Automatic (la langue utilisée est alors fournie par le navigateur du visiteur).',
            'Choose the default language' => 'Choisissez la langue par defaut',
            'Next step' => 'Etape suivante',
            'Jirafeau has an administration interface (through admin.php). ' .
            'You can set a password to access the intercace or let it be empty ' .
            'to disable the interface.' => 'Jirafeau a une interface d\'administration (accessible via admin.php). Vous pouvez saisir un mot de passe pour y acceder ou ne pas en mettre pour désactiver l\'accès à l\'interface.',
            'Administration password' => 'Mot de passe d\'administration',
            /* admin.php */
            'Sorry, the admin interface is not enabled.' => 'Désolé, l\'interface d\'administration n\'est pas activée.',
            'Login' => 'Connexion',
            'Wrong password.' => 'Mot de passe invalide.',
            'Admin interface' => 'Interface d\'administration',
            'Clean expired files' => 'Nettoyer les fichiers périmés',
            'Clean old unfinished transferts' => 'Nettoyer les anciens transferts inachevés',
            'Clean' => 'Nettoyage',
            'Search files by name' => 'Rechercher les fichiers par leur nom',
            'Search' => 'Rechercher',
            'List all files' => 'Lister tous les fichiers',
            'List' => 'Lister',
            'Actions' => 'Actions',
            'Search files by file hash' => 'Rechercher par empreinte de fichier',
            'Search a specific link' => 'Rechercher un lien particulier',
            'Number of cleaned files' => 'Nombre de fichiers nettoyés',
            'Logout' => 'Déconnexion',
            'You are now Logout' => 'Vous êtes maintenant déconnecté',
            'Link deleted' => 'Lien supprimé',
            'Filename' => 'Nom',
            'file' => 'fichier',
            'link' => 'lien',
            'Type' => 'Type',
            'Size' => 'Taille',
            'Expire' => 'Expiration',
            'Onetime' => 'Une fois',
            'Upload date' => 'Date d\'envoie',
            'Origin' => 'Origine',
            'Action' => 'Action',
            'Del link' => 'Supprimer le lien',
            'Del file and links' => 'Supprimer fichier et liens',
            'Deleted links' => 'Liens supprimés',
            /* script.php */
            'Welcome to Jirafeau\'s query interface' => 'Bienvenue sur l\'interface programmable de Jirafeau',
            'This interface permits to script your uploads and downloads.' => 'Cette interface permet de programmer vos envoie et téléversements.',
            'The instructions above show how to query this interface.' => 'Les instructions ci-dessous montrent comment interroger cette interface.',
            'Get server capacity' => 'Récupérer la capacité d\'envoie du serveur',
            'Get Jirafeau\'s version' => 'Récupérer la version de Jirafeau',
            'Send a GET query to' => 'Envoyez une requette GET à',
            'Send a POST query to' => 'Envoyez une requette POST à',
            'Upload a file' => 'Envoyer un fichier',
            'Get a file' => 'Récupérer un ficher',
            'Required' => 'Requis',
            'Optional' => 'Optionel',
            'Parameters' => 'Paramètres',
            'This will return brut text content.' => 'Retourne un texte brut.',
            'First line is the download reference and the second line the delete code.' => 'La première ligne correspond à la reference de l\'envoie et la seconde ligne correspond au code de suppréssion.',
            'First line is the server capacity (in Bytes).' => 'La première ligne correspond à la capacité du serveur (en octets).',
            'Example' => 'Exemple',
            'If a password has been set, send a POST request with it.' => 'Si un mot de passe a été définis, envoyer une requette POST avec.',
            'Delete a file' => 'Supprimer un fichier',
            'This will return "Ok" if succeded, "Error" otherwhise.' => 'Retourne "OK" en cas de succès, "Error" dans le cas contraire.',
            'Get a generated scripts' => 'Récupérer un script généré',
            'This will return brut text content of the code.' => 'Renvoie le code sous forme the texte brut.',
            'Initalize a asynchronous transfert' => 'Initialiser un transfert asynchrone',
            'The goal is to permit to transfert big file, chunk by chunk.' => 'Le but est de permettre de transférer de gros fichiers, morceaux par morceaux.',
            'Chunks of data must be sent in order.' => 'Chaque morceau doit être envoyé dans l\'ordre.',
            'First line is the asynchronous transfert reference and the second line the code to use in the next operation.'
                => 'La première ligne correspond à la référence de transfert asynchrone, la seconde au code à utiliser dans la prochaine requette.',
            'Push data during asynchronous transfert' => 'Envoyer des données pendant un transfert asynchrone',
            'Returns the next code to use.' => 'Renvoie le prochain code à utiliser.',
            'Finalize asynchronous transfert' => 'Finaliser un transfert asynchrone',
            'Create a data block' => 'Creer un bloque de données',
            'This interface permits to create a block of data filled with zeros.' => 'Cette interface permet de creer un bloque de données remplies de zeros.',
            'You can read selected parts, write (using a code) and delete the block.' => 'Vous pouvez lire, écrire (en utilisant un code) et supprimer le bloque.',
            'Blocks may be removed after a month of non usage.' => 'Les bloques non utilisés depuis plus d\'un mois seront probablement supprimés.',
            'Get block size' => 'Récupérer la taille d\'un bloque',
            'Read data in a block' => 'Lire des données dans un bloque',
            'Write data in a block' => 'Ecrire des données dans un bloque',
            'First line is a block id the second line the edit/delete code.' => 'La premiere ligne est l\'identifiant du bloque, la seconde est son code d\'écriture/suppression.',
            'This will return asked data or "Error" string.' => 'Retourne les données ou la chaine "Error".',
            'Delete a block' => 'Supprimer un bloque',
            'This will return "Ok" or "Error" string.' => 'Retourn la chaine "Ok" ou "Error".',
    );
 ?>
