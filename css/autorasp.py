#! /bin/python
# Ler o log
file = open('inter.log', 'r')
for linha in file:
    print(linha)
    lista.append(linha.strip())
print(linha)
