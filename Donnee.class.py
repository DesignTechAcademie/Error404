#!/Python-3.5.2/
#-*-coding:Utf-8 -*
import requests;

class Donnee: #Une class donnees
    def __init__(self,donnees): # Notre méthode constructeur
        self.Nom_donnee = donnees

    def Envoie_donnee(adresse): # Notre méthode qui va envoie la donée (son nom) à un serveur en parametre
        requests.post(adresse, data = self.Nom_donnee)

    def Afficher_donnee(self):
        affichage = self.Nom_donnee
        print(affichage)



badge=Donnee("256")
badge.Afficher_donnee()
