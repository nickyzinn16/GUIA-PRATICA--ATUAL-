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

    quero um sistema com mini menu (1-nome, 2-lista nomes, 3-sair prog). 
    quando o 1 pede nome e insere o nome no arquivo, quando 2 lista os nomes do ficheiro, 3 - sair
        Validacoes
        Evitar nomes vazios
        Apresentar msg caso arquivo estiver vaziu (nao tiver nenuma informacao)