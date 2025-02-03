# Projet-Docker
Le projet POZOS est une preuve de concept (POC) visant à déployer une application étudiante en utilisant Docker et Docker Compose et la gestion du registre prive avec harbor. Ce projet comprend deux composants principaux :

simple_api : Une API Flask sécurisée par authentification HTTP pour gérer un fichier JSON contenant les âges des étudiants.
website : Une application Web PHP qui interagit avec l'API pour afficher la liste des étudiants et leurs âges.
Le projet met en avant les bonnes pratiques de déploiement Docker

Objectifs
Dockerisation de l'application : Simplifier le déploiement et la gestion des services.
Sécurité : Implémenter une authentification HTTP pour protéger l'API.
Documentation complète : Fournir des instructions claires pour la mise en place et l'utilisation.
Structure du Projet
student-list-master/ ├── simple_api/ │ ├── data/ │ │ ├── student_age.json │ ├── Dockerfile │ ├── requirements.txt │ ├── student_age.json │ ├── student_age.py ├── website/ │ ├── index.php ├── docker-compose.yml ├── README.mdode de l'API Flask et le fichier de dépendances requirements.txt.

website/ : Contient le code de l'application Web PHP.
