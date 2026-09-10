numeros = []

for i in range(8):
    numero = int(input("Digite um numero: "))
    numeros.append(numero)

    maior = numeros[0]
    menor = numeros[0]

for numero in numeros:
    if numero > maior:
        maior = numero

    if numero < menor:
        menor = numero

print("Maior valor: ", maior)
print("Menor valor: ", menor)
