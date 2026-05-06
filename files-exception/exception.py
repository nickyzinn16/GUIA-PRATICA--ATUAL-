try: 
    num1 = int(input("Introzuda primeiro numero: "))
    num2 = int(input("Introzuda Segundo numero: "))

    result = num1/num2
    print(f"Resultado: {result}!")

except ZeroDivisionError:
    print(f"Erro: Divisao com 0!")

except ValueError:
    print(f"Erro: Carater Invalido!")

