#!/bin/bash
openssl rsault -verify -in fichierSgne -pubin -inkey publicCle -out fichierP
