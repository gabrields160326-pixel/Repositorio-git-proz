numeros = []
soma = 0

for i in range(5):
    numero = int(input("Digite um numero: "))
    numeros.append(numero)
    soma += numero

print("Lista: ", numeros)
print("Soma: ", soma)
