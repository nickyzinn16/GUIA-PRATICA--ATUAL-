const userData = [
    {"nome": "Ana", "idade": "17", "address": "Morada", "email": "ana.silva@gmail.com"},
];

// Guardar dados iniciais no localStorage
if(!localStorage.getItem("userData")){
    localStorage.setItem('userData', JSON.stringify(userData));
}

// Formulario
document.getElementById("userForm").addEventListener("submit", function(event){

    event.preventDefault();

    let nome = document.getElementById("nome").value;
    let idade = document.getElementById("idade").value;
    let address = document.getElementById("address").value;
    let email = document.getElementById("email").value;

    let novoUsuario = {
        nome: nome,
        idade: idade,
        address: address,
        email: email
    };

    let dados = JSON.parse(localStorage.getItem("userData"));

    dados.push(novoUsuario);

    localStorage.setItem("userData", JSON.stringify(dados));

    document.getElementById("nome").value = "";
    document.getElementById("idade").value = "";
    document.getElementById("address").value = "";
    document.getElementById("email").value = "";
});

const userTableBody = document.querySelector("#userTableBody");

// Listar utilizadores
function listUserDatas(){

    userTableBody.innerHTML = "";

    let users = localStorage.getItem("userData");

    if(!users) return;

    users = JSON.parse(users);

    users.forEach(user => {

        const tr = document.createElement("tr");

        const tdName = document.createElement("td");
        tdName.textContent = user.nome;

        const tdAge = document.createElement("td");
        tdAge.textContent = user.idade;

        const tdEmail = document.createElement("td");
        tdEmail.textContent = user.email;

        const tdAddress = document.createElement("td");
        tdAddress.textContent = user.address;

        // Botao eliminar
        const tdDelete = document.createElement("td");
        const btnDelete = document.createElement("button");

        btnDelete.textContent = "Eliminar";

        btnDelete.onclick = function(){
            tr.remove();
        };

        tdDelete.appendChild(btnDelete);

        tr.appendChild(tdName);
        tr.appendChild(tdAge);
        tr.appendChild(tdEmail);
        tr.appendChild(tdAddress);
        tr.appendChild(tdDelete);

        userTableBody.appendChild(tr);
    });

}

function limpar(){
    localStorage.setItem("userData", JSON.stringify([]));
    
    userTableBody.innerHTML = "";
}

// tpc: Botao de eliminar cada linha da tabela (cada linha tem um delete)