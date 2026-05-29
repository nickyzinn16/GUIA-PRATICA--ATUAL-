from sistema import salvar, listar

def test_salvar_e_listar():
    salvar("Paracetamol")
    dados = listar()
    assert "Paracetamol\n" in dados