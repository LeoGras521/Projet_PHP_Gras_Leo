# 🎮 GUIDE UTILISATEUR - Rainbow Six Siege
(Projet fait en 10h)

## 📱 Comment utiliser le site

1️⃣ Première étape: Installer php, symfony et composer puis télécharger le dossier le projet sur GitHub ou cloner avec la commande git clone(URL), puis installer xampp.
2️⃣ Deuxième étape: Importer les données d'exemple

1. Ouvrir **PhpMyAdmin** : `http://localhost/phpmyadmin`
2. Créer un base de données **projet_php_gras_leo**
3. Cliquer sur **"Importer"**
4. Choisir le fichier **sample_data.sql**
5. Cliquer sur **"Exécuter"**
   
3️⃣ Troisième étape: Commande pour lancer le serveur symfony: symfony server:start .


### 1️⃣ Première visite - Créer un compte

1. Ouvrir le site : `http://localhost:8000`
2. Cliquer sur **"Inscription"** dans le menu
3. Remplir le formulaire :
   - **Nom d'utilisateur** : ton pseudo (minimum 3 caractères)
   - **Email** : ton adresse email
   - **Mot de passe** : minimum 6 caractères
   - **Confirmer le mot de passe** : retaper le même mot de passe
4. Cliquer sur **"S'inscrire"**
5. Tu es redirigé vers la page de connexion

### 2️⃣ Se connecter

1. Cliquer sur **"Connexion"** dans le menu
2. Entrer ton **email** et ton **mot de passe**
3. Cliquer sur **"Se connecter"**
4. Tu arrives sur la page d'accueil connecté

### 3️⃣ Découvrir la page d'accueil

Sur la page d'accueil tu trouveras :
- 🎯 **Présentation de Rainbow Six Siege**
- 👥 **Accès aux Agents** - voir tous les opérateurs
- 🗺️ **Accès aux Maps** - voir toutes les cartes

### 4️⃣ Consulter les Agents

1. Cliquer sur **"Agents"** dans le menu
2. Tu vois la **liste de tous les agents** avec :
   - Photo de l'agent
   - Nom
   - Rôle (Attaquant/Défenseur)
   - Statistiques (vitesse/armure)
   - Description du gadget

3. **Voir les détails** : Cliquer sur **"Détails"** pour voir toutes les infos
4. **Filtrage visuel** : Les attaquants sont en rouge, les défenseurs en bleu

### 5️⃣ Ajouter un Agent (si connecté)

1. Aller sur la page **"Agents"**
2. Cliquer sur **"Nouvel Agent"** (en haut à droite)
3. Remplir le formulaire :
   - **Nom** : ex: Ash, Thermite, Sledge...
   - **Rôle** : Attaquant ou Défenseur
   - **Vitesse** : 1, 2 ou 3
   - **Armure** : 1, 2 ou 3
   - **Gadget** : description du gadget spécial
   - **Description** : présentation générale de l'agent
   - **Image** (optionnel) : URL d'une image

4. Cliquer sur **"Créer l'agent"**
5. L'agent apparaît dans la liste

### 6️⃣ Modifier un Agent

1. Sur la liste des agents, cliquer sur **"Détails"**
2. Cliquer sur **"Modifier"**
3. Changer les informations souhaitées
4. Cliquer sur **"Enregistrer les modifications"**

### 7️⃣ Supprimer un Agent

1. Sur la page de détails d'un agent, cliquer sur **"Modifier"**
2. En bas de la page, cliquer sur **"Supprimer cet agent"**
3. Confirmer la suppression
4. L'agent est supprimé définitivement

### 8️⃣ Consulter les Maps

1. Cliquer sur **"Maps"** dans le menu
2. Tu vois la **liste de toutes les maps** avec :
   - Image de la map
   - Nom
   - Mode de jeu (Bomb, Secure Area, Hostage)
   - Localisation
   - Description

3. **Voir les détails** : Cliquer sur **"Détails"**

### 9️⃣ Ajouter une Map (si connecté)

1. Aller sur la page **"Maps"**
2. Cliquer sur **"Nouvelle Map"**
3. Remplir le formulaire :
   - **Nom** : ex: Bank, Consulate, Oregon...
   - **Mode de jeu** : Bomb / Secure Area / Hostage
   - **Localisation** : ex: Los Angeles, USA
   - **Description** : présentation de la map
   - **Image** (optionnel) : URL d'une image

4. Cliquer sur **"Créer la map"**

### 🔟 Modifier/Supprimer une Map

Même principe que pour les agents :
- **Modifier** : via le bouton "Modifier" sur la page de détails
- **Supprimer** : via le bouton "Supprimer" en bas de la page d'édition

### 1️⃣1️⃣ Se déconnecter

1. Cliquer sur **"Déconnexion"** dans le menu (en haut à droite)
2. Tu es déconnecté et redirigé vers l'accueil

---

## 🎨 Navigation du site

### Menu principal (toujours visible)

- **🏠 Accueil** : retour à la page d'accueil
- **👥 Agents** : voir tous les agents
- **🗺️ Maps** : voir toutes les maps
- **🔐 Connexion** : se connecter (si pas connecté)
- **📝 Inscription** : créer un compte (si pas connecté)
- **🚪 Déconnexion** : se déconnecter (si connecté)

### Pages disponibles

| Page | URL | Description |
|------|-----|-------------|
| Accueil | `/` | Présentation du jeu |
| Agents | `/agent` | Liste des agents |
| Détails Agent | `/agent/123` | Détails d'un agent |
| Nouvel Agent | `/agent/new` | Créer un agent |
| Modifier Agent | `/agent/123/edit` | Modifier un agent |
| Maps | `/map` | Liste des maps |
| Détails Map | `/map/123` | Détails d'une map |
| Nouvelle Map | `/map/new` | Créer une map |
| Modifier Map | `/map/123/edit` | Modifier une map |
| Connexion | `/login` | Page de connexion |
| Inscription | `/register` | Créer un compte |

---

## 🎯 Fonctionnalités principales

### ✅ Ce que tu peux faire sur le site :

- ✅ Voir la page d'accueil
- ✅ Consulter la liste des agents
- ✅ Voir les détails d'un agent
- ✅ Consulter la liste des maps
- ✅ Voir les détails d'une map
- ✅ Créer un compte
- ✅ Te connecter
- ✅ Créer un nouvel agent
- ✅ Modifier un agent existant
- ✅ Supprimer un agent
- ✅ Créer une nouvelle map
- ✅ Modifier une map existante
- ✅ Supprimer une map

---

## 💡 Astuces et conseils

### 📸 Trouver des images d'agents/maps

Pour le champ "Image", tu peux utiliser :
- Images officielles Ubisoft
- Wiki Rainbow Six Siege
- Google Images (rechercher "rainbow six siege [nom agent] png")

**Format d'URL :** `https://exemple.com/image.png`

### ⚡ Vitesse et Armure

Dans Rainbow Six Siege :
- **Vitesse 3 / Armure 1** = Agent rapide, peu résistant
- **Vitesse 2 / Armure 2** = Agent équilibré
- **Vitesse 1 / Armure 3** = Agent lent, très résistant

### 🎮 Modes de jeu

- **Bomb** : Désarmer une bombe (mode compétitif)
- **Secure Area** : Sécuriser une zone
- **Hostage** : Sauver un otage

### 🛡️ Rôles des agents

- **Attaquant** (rouge) : Pénètre dans le bâtiment pour accomplir l'objectif
- **Défenseur** (bleu) : Défend l'objectif contre les attaquants

---

## 🎓 Pour aller plus loin


Tu auras alors :
- ✅ 10 agents (Ash, Thermite, Sledge, Thatcher, IQ, Jäger, Bandit, Mute, Rook, Doc)
- ✅ 6 maps (Bank, Consulate, Oregon, Clubhouse, Villa, Kafe)

---

## 🎉 Profite bien du site !

Le site est maintenant prêt à l'emploi. Tu peux :
- 📚 Créer ta propre base de données d'agents R6
- 🗺️ Référencer tes maps préférées
- 📊 Comparer les statistiques des opérateurs
- 🎮 Partager tes connaissances sur le jeu

  ## 📊 Concernant les étapes de développement

  J'ai dans un premier temps installé mon environnement et relié ma base de données avec, ensuite je me suis concentré sur la création de la base de données après le back avec la sécurité et pour finir     le front.

**Bon jeu !** 🎯


