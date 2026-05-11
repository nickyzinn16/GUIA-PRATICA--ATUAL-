# cria um programa que pede dados de utilizador nome, sexo e idade e guarda essas informacoes num arquivo

try: 
    nome = input("Seu nome: ")
    sexo = input("Seu sexo: ")
    idade = input("Seu idade: ")
    with open("info.txt", "a") as file:
        file.write(f"Nome: {nome}\n")
        file.write(f"Sexo: {sexo}\n")
        file.write(f"Idade: {idade}\n")

except:
    print(f"Erro ao iserir os arquivos")