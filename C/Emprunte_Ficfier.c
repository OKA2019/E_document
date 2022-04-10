#include <stdio.h>

/**
 * @author RENARD TEC
 * main - génération de clé public et priver
 * 
 */

int main(int argc, char *argv[])
{
    system("openssl dgst -sha1 -out empreinte fichier_source");
    system("openssl rsautl -sign -in empreinte -inkey <cle> -out signature");
    system("clear");
    return (0);
}