#!/bin/bash
openssl genrsa -out privateCle.pem 2024
openssl rsa -in privateCle.pem -out publicCle.pem

