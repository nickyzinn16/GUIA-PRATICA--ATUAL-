def salvar(nome):
    with open("medicamentos.txt", "a") as arq:
        arq.write(nome + "\n")

def listar():
    with open("medicamentos.txt", "r") as arq:
        return arq.readlines()