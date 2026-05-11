# quero um sistema com mini menu (1-nome, 2-lista nomes, 3-sair prog). 
# quando o 1 pede nome e insere o nome no arquivo, quando 2 lista os nomes do ficheiro, 3 - sair
    # Validacoes
    # Evitar nomes vazios
    # Apresentar msg caso arquivo estiver vaziu (nao tiver nenuma informacao)

def inserir():
    try:
        nome = input(f"Insira o nome: ")
        with open("info.txt", "a") as file:
            file.write(f"{nome}\n")
        print(f"Nome {nome} guardado.")
    except:
        print(f"Erro")

def listar():
    try:
        with open("info.txt", "r") as file:
            linhas = file.readlines()
            if len(linhas) == 0:
                print(f"O ficheiro ainda nao tem nenhum nome")
            else:
                for line in linhas:
                    print(line)
    except:
        print(f"Erro")

def menu():
    while True:
        print(f"\n==== Menu ====")
        print(f"1 - Inserir nome")
        print(f"2 - Listar nome")
        print(f"3 - Sair")

        opcao = input(f"Escolha uma opcao: ")

        if opcao == "1":
            inserir()
        elif opcao == "2":
            listar()
        elif opcao == "3":
            print(f"Fim do programa.")
            break
        else:
            print(f"A opcao inserida eh invalida")

menu()