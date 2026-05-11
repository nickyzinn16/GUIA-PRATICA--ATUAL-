import mysql.connector
import csv

def connector():
    return mysql.connector.connect(
        host = "localhost",
        user = "asibd",
        password = "asibd#12",
        database = "myschool_db"
    )

def menu():
    print("--Menu--")
    print(f"1 - Inserir\n")
    print(f"2 - Listar\n")
    print(f"3 - Atualizar\n")
    print(f"4 - Eliminar\n")
    print(f"5 - Exportar CSV (lib)\n")
    print(f"6 - Exportar CSV (MAnual)\n")
    print(f"7 - Sair\n")


def inserir():
    return "inserido"

def listar():
    return "Listar"

def atualizar():
    return "Atualizado"

def eliminar():
    return "Eliminado"

def exportar_csv_lib():

def exportar_csv_manual():
    try:
        conn = conector()
        cursor = conn.cursor()

        query = f"SELECT * FROM users"
        cursor.execute(query)

        fetched_users = cursor.fetchall()

        # Cabecalh da estrutura CSV
        # Exemplo da estruturaa CSV:
            # ID, username, email, status, avatar, created_at

        with open("exported_users.csv", "w", encoding="utf-8") as f:
            # definicao do cabecalho
            f.write("id,username,email,status,avatar,created_at\n")

            #dados
            for new_line in fetched_users:
                str_line = [str(field) for field in new_line]
                # Colocar virgula na estrutura da linha
                csv_line = ",".join(str_line)
                # Escreva a linha no arquivo csv final
                f.write(csv_line+"\n")

                print("Dados dos utilzadores exportados para CSV")

    except Exception as e:
        print(f"Erro ao exportar: {e}")

    finally:
        conn.close()
