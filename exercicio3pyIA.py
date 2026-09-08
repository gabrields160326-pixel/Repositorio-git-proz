nota1 = float(input("Digite o primeiro numero: "))
nota2 = float(input("Digite o segundo numero: "))
nota3 = float(input("Digite o terceiro numero: "))

media = nota1 + nota2 + nota3 / 3

print(f"\nNota 1: {nota1}")
print(f"Nota 2: {nota2}")
print(f"Nota 3: {nota3}")
print(f"Média: {media:.2f}")

if media >= 7:
    print("passou")
elif media >= 5:
    print("recuperação")
else:
    print("reprovo")
