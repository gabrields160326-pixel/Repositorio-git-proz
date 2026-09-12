senha = ""
tentativas = 0

while senha != "python123" and tentativas < 3:
    senha = input("Digite sua senha: ")
    tentativas += 1

if senha == "python123":
    print("Pode entrar")
else:
    print("broquiadu")
