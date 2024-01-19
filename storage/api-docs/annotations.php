<?php



/**
 * @OA\POST(
 *     path="http://localhost:8000/api/news/store",
 *     summary="Souscris a un newslatter",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "email": "test@gmail.com"
 * }
 *         )
 *     ),
 *     tags={"Newsletter"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/news",
 *     summary="Creer un newsletter",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "libelle": "newsletter de EUREKA",
 *     "contenu": "Nous sommes heureux de vous annoncez que notre plateforme vient d'etre marquée comme numéro un mondial"
 * }
 *         )
 *     ),
 *     tags={"Newsletter"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/roles/store",
 *     summary="creer un role",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "nomRole": "moniteur"
 * }
 *         )
 *     ),
 *     tags={"Role"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/roles/3/update",
 *     summary="Modifier un role",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Role"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/demandes/2/destroy",
 *     summary="supprimer une demande",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/demandes/3/refuse",
 *     summary="Refuser une demande",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/demandes/1/accept",
 *     summary="Accepter une demande",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/demandes/refusedDemande",
 *     summary="demandes refusées",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/demandes/acceptedDemande",
 *     summary="demandes acceptées",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/demandes/index",
 *     summary="demandes en attente",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/demandes/1/update",
 *     summary="Modifier une demande",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {}
 *         )
 *     ),
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/demandes/store",
 *     summary="creer une demande",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "duree": 1,
 *     "details": "fgyhzgf hkbhrf",
 *     "email": "pro@gmail.com"
 * }
 *         )
 *     ),
 *     tags={"Demande publicité"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/categories/store",
 *     summary="Creer une categorie",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "nom": "animal"
 * }
 *         )
 *     ),
 *     tags={"categorie"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/categories/index",
 *     summary="Liste des categories",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"categorie"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/categories/1/update",
 *     summary="Modifier une categorie",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "nom": "argent"
 * }
 *         )
 *     ),
 *     tags={"categorie"},
 * )
 */


/**
 * @OA\DELETE(
 *     path="http://localhost:8000/api/categories/1/destroy",
 *     summary="Supprimer une categorie",
 *     description="",
 * @OA\Response(response="204", description="Deleted successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"categorie"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/temoignages/store",
 *     summary="Enregistrer témoignage",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "contenu": "votre site est extra ordinaire"
 * }
 *         )
 *     ),
 *     tags={"temoignage"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/temoignages/index",
 *     summary="Voir tous les temoignages",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"temoignage"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/temoignages/1/show",
 *     summary="Voir un témoignage",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"temoignage"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/temoignages/1/accept",
 *     summary="Accepter un témoignage",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"temoignage"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/contacts/index",
 *     summary="Liste des contacts",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"contact"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/contacts/store",
 *     summary="Enregistré contact",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "nom": "tamba",
 *     "email": "tamba@gmail.com",
 *     "message": "bonjour comment va "
 * }
 *         )
 *     ),
 *     tags={"contact"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/contacts/1/update",
 *     summary="Modifier contact",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "nom": "mamba"
 * }
 *         )
 *     ),
 *     tags={"contact"},
 * )
 */


/**
 * @OA\DELETE(
 *     path="http://localhost:8000/api/contacts/1/destroy",
 *     summary="Supprimer un contact",
 *     description="",
 * @OA\Response(response="204", description="Deleted successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"contact"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/contacts/1/show",
 *     summary="voir un contact",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"contact"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/pubs/1/invalide",
 *     summary="invalider une publicité",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Publicités"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/pubs/1/show",
 *     summary="voir une publicité",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Publicités"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/pubs/index",
 *     summary="liste des publicités",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Publicités"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/pubs/store",
 *     summary="Creer une publicité",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Publicités"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/biens/1/refuse",
 *     summary="Refuser un bien",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Biens"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/biens/1/accepte",
 *     summary="Accepter un bien",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Biens"},
 * )
 */


/**
 * @OA\DELETE(
 *     path="http://localhost:8000/api/biens/1/destroy",
 *     summary="Supprimer un bien",
 *     description="",
 * @OA\Response(response="204", description="Deleted successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Biens"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/biens/1/update",
 *     summary="Modifier un bien",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Biens"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/biens/1/show",
 *     summary="récupérer un bien",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Biens"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/biens/index",
 *     summary="liste des biens trouvés",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Biens"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/biens/store",
 *     summary="déclarer bien",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Biens"},
 * )
 */


/**
 * @OA\POST(
 *     path="/api/users/whatsapp/4",
 *     summary="whatsapp",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Users"},
 * )
 */


/**
 * @OA\GET(
 *     path="/chatify",
 *     summary="chatify",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Users"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/users/1/update",
 *     summary="Modification utilisateur",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "name": "binta"
 * }
 *         )
 *     ),
 *     tags={"Users"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/users/archives",
 *     summary="utilisateurs archives",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Users"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/users/nonArchives",
 *     summary="utilisateurs non archives",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Users"},
 * )
 */


/**
 * @OA\PUT(
 *     path="http://localhost:8000/api/1/archive",
 *     summary="archivage",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Users"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/auth/logout",
 *     summary="déconnexion",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Users"},
 * )
 */


/**
 * @OA\GET(
 *     path="http://localhost:8000/api/users/index",
 *     summary="liste des utilisateurs",
 *     description="",
 * @OA\Response(response="200", description="OK")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     tags={"Users"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/login",
 *     summary="authentification",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "email": "ba@gmail.com",
 *     "password": "@zerty123"
 * }
 *         )
 *     ),
 *     tags={"Users"},
 * )
 */


/**
 * @OA\POST(
 *     path="http://localhost:8000/api/register",
 *     summary="inscription",
 *     description="",
 * @OA\Response(response="201", description="Created successfully")
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * )
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             example=
  * {
 *     "name": "ba",
 *     "firstName": "mountaga",
 *     "phone": 709693363,
 *     "email": "ba@gmail.com",
 *     "password": "@zerty123",
 *     "confirmPassword": "@zerty123"
 * }
 *         )
 *     ),
 *     tags={"Users"},
 * )
 */


