FROM python:3.8-buster
LABEL maintainer="Pierrette"

# Installer les dépendances système
RUN apt update && apt install -y \
    python3-dev \
    libsasl2-dev \
    libldap2-dev \
    libssl-dev

# Copier les fichiers nécessaires
COPY requirements.txt /requirements.txt
COPY student_age.py /student_age.py
COPY student_age.json /data/student_age.json

# Installer les dépendances Python
RUN pip3 install -r /requirements.txt

# Déclarer un volume pour la persistance des données
VOLUME /data

# Exposer le port de l'API
EXPOSE 5000

# Commande pour lancer l'API
CMD ["python3", "/student_age.py"]
