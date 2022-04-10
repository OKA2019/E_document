#!/bin/bash
openssl rsautl -sign -in fichierP privateCle -out fichierSigne
