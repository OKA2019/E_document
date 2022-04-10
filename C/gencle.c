#include <stdio.h>

/**
 * @author RENARD TEC
 * main - génération de clé public et priver
 * 
 */

int main()
{
    char nom = "text1";
    int taille = 1024;
    system("openssl genrsa -out ClePrive.pem 1024");
    system("openssl rsa -in ClePrive.pem -out MaClePublique.pem");
    system("clear");
    return (0);
}
