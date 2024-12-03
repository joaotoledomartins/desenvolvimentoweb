/*function carregaCidades(){
    let form = document.getElementsByTagName("form")[0];
    form.setAttribute("action", "");
    form.submit();
};*/

function pegaValorEstado(){
    let selectEstado = document.getElementById("estado");
    return selectEstado.options[selectEstado.selectedIndex].value;
};

function criarOptionsCidades(){
    let selectCidade = document.getElementById("cidade");
    limpaSelect(selectCidade);
    for(let cidade of resposta){
        let optionCid = document.createNodeIterator("option");
        optionCid.setAttribute("value", cidade);
        optionCid.innerContent = cidade;
        selectCidade.appendChild(optionCid); 
    }
};

function limpaSelect(campo){
    let opt;
    while(opt = campo.firstChild){
        campo.removeChild(opt);
    }
}

function carregaCidades(){
    let corpo = {"estado": pegaValorEstado()};
    fetch("http://localhost/João Pedro Toledo Martins/desenvolvimentoweb/Aula 03/cidade.php", {
        method: "POST", headers: {"content-type": "application-json"}, body: JSON.stringify(corpo)})
        .then(resposta => {
            criarOptionsCidades(resposta);
        })
        .catch(error=>console.log(error));

}

document.addEventListener("DOMContentLoaded", ()=>{
    let selectEstado = document.getElementById("estado");
    selectEstado.addEventListener("change", carregaCidades);
});