#include <stdio.h>

/**
 * @author RENARD TEC
 * main - petit fichier qui regroupe les differents informatiosn relatifs au gros fichier
 * 
 */

int main(int argc, char *argv[])
{
    system("echo 'Type de chiffrement : asymetrique; Fonction de hachage : ; Algorithme de chreiffrement : ; Mot de passe du gros fichier : ;' > petit_fichier.txt");
    system("openssl rsautl -encrypt -in <fichier_entree> -pubin -inkey <cle_publique_destin> -out <fichier_sortie>");
    system("clear");
    return (0);
}