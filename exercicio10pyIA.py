def calcular_area_retangulo(base,altura):
    area = base * altura
    return area

base = float(input("Digite o valor da base: "))
altura = float(input("Digite o valor da altura: "))

    #aqui em cima vai guardar os valores que o usuario vai digitar
    #agr eu preciso tirar esse valor da função, precisamos chamar ela denovo
    #ou seja:

resultado = calcular_area_retangulo(base,altura)
print(resultado)
