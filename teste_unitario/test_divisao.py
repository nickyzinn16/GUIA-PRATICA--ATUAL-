import pytest
from calculadora import dividir

def test_divisao_zero():
    with pytest.raises(ValueError):
        dividir(10, 0)