// Promise => then e catch

function loadsomedata() {
    return new Promise(function (resolve, reject) {
        setTimeout(() => {
            const data = { id: 123, name: "Bruno" };
            resolve(data);
        }, 1000);
    });
}

loadsomedata()
    .then(function (data) {
        console.log(`DADOS CARREGADOS COM SUCESSO`, data);
        return data.name.toLowerCase(); // Acesse a propriedade 'name' do objeto 'data'
    })
    .then(function (newdata) {
        console.log(`DADOS CARREGADOS COM SUCESSO`, newdata);
        return newdata; // Retorna 'newdata'
    })
    .catch(function (error) {
        console.log("dados não carregados", error);
    });
