# SecureDB-PHP — Secure Database Authentication

## Objectif
Sécurisation des connexions PHP à une base de données 
par chiffrement des credentials — élimination des mots 
de passe en clair dans le code source.

## Problème adressé
Les configurations PHP basiques stockent les credentials 
de connexion BDD en clair dans les fichiers source — 
vecteur d'exposition critique en cas d'accès non autorisé 
au code (LFI, mauvaise configuration serveur, fuite de repo).

## Solution implémentée
- Génération de clé de chiffrement (gen_clé.php)
- Chiffrement des credentials à la volée (Chiffrage.php)
- Module de chiffrement/déchiffrement (Encryption.php)
- Connexion sécurisée à la BDD (Connexion.php)

## Stack technique
- Langage : PHP
- Méthode : Chiffrement symétrique
- Contexte : Sécurité applicative web

## Cas d'usage
Tout environnement PHP exposant des scripts 
de connexion BDD sans gestion sécurisée des secrets.
