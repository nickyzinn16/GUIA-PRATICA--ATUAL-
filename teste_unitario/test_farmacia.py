import pytest
from farmacia import Medicamento

@pytest.fixture
def medicamento():
    return Medicamento("Vitamina C", 20)

def test_venda(medicamento):
    medicamento.vender(5)
    assert medicamento.quantidade == 15

def test_nome(medicamento):
    assert medicamento.nome == "Vitamina C"

def test_quantidade(medicamento):
    assert medicamento.quantidade == 20