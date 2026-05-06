try:
    file = open("info.txt", "w")
    file.write("Hoje eh o sexto dia de Maffvfcio")
    file.close()

except: 
    print(f"Problema ao abrir o arquivo")

with open("info.txt", "r") as file:
    content = file.read()
    print(f"{content}")
