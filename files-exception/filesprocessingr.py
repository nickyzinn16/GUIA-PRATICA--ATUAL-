try:
    file = open("info.txt", "r")
    content = file.read()
    print(content)
    file.close()

except: 
    print(f"Problema ao abrir o arquivo")