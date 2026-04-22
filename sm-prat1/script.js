// Definicao do Storage
localStorage.setItem('theme', 'dark');
localStorage.setItem('lang', 'pt-pt');
localStorage.setItem('version', '1.0.1');

// Acesso aos dados armazenados
const theme = localStorage.getItem('theme');
console.log(theme);

const userData = [
    {"name": "Ana", "age": "17", "address": "Morada", "email": "ana.silva@gmail.com"},
    {"name": "Maria", "age": "20", "address": "Montsu", "email": "maria.silva@gmail.com"},
    {"name": "Vanessa", "age": "30", "address": "Fernando Pau", "email": "vanessa.silva@gmail.com"},
    {"name": "Hinata", "age": "23", "address": "Konoha", "email": "hinata.silva@gmail.com"},
]

// Acessar aos dados armazenados
localStorage.setItem('userData', JSON.stringify(userData));
const getUserData = JSON.parse(localStorage.getItem('userData'));
console.log(getUserData)