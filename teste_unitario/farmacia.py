class Medicamento:

    def __init__(self, nome, quantidade):
        self.nome = nome
        self.quantidade = quantidade

    def vender(self, qtd):

        if qtd > self.quantidade:
            raise ValueError("Estoque insuficiente")

        self.quantidade -= qtd