async function getRemoteUsers(){
    try {
        const res = await fetch('https://jsonplaceholder.typicode.com/users');
        if(!res.ok)
            throw new Error(`Erro de HTTP: ${res.status} ${res.statusText}`)

        const users = await res.json();

        console.log(users);


        } catch (error) {
        console.log('Erro ao pegar dados'+error.mesage)
        } finally {
            console.log("Terminou de todas as formas")
    }
}
getRemoteUsers()

/* tpc: colocar isto no html (mostrar na pagina html). cada usuario deve ter uma imagem diferente. 
cartao, informacao de users nisto. 
As informacoes city, stret, suite, company (nome da empresa), nome, email, telefone, website, nick

/* fetch('https://jsonplaceholder.typicode.com/users').then((res)=>{
    console.log(res)
}) */