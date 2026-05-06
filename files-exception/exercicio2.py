def inserir():
    try:
        nome = input(f"Nome: ")
        
        with open("info.txt", "a") as file:
            file.write(f"{nome}\n")
        print(f"Nome guardado")
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