var qtdeCampos = 0;

function addParente() {
	var clone = document.getElementById('origem').cloneNode(true);  
    var destino = document.getElementById('destino');  
    destino.appendChild (clone);  
      
    var camposClonados = clone.getElementsByTagName('input');  
      
    for(i=0; i<camposClonados.length;i++){  
        camposClonados[i].value = '';  
    }
}

function addDocumentos() {
	var objPai = document.getElementById("campoPai");
	//Criando o elemento DIV;
	var objFilho = document.createElement("div");
	//Definindo atributos ao objFilho:
	objFilho.setAttribute("id","filho"+qtdeCampos);

	//Inserindo o elemento no pai:
	objPai.appendChild(objFilho);
	//Escrevendo algo no filho recém-criado:
	document.getElementById("filho"+qtdeCampos).innerHTML = "";
	qtdeCampos++;
}

function removerCampo(id) {
	var objPai = document.getElementById("campoPai");
	var objFilho = document.getElementById("filho"+id);

	//Removendo o DIV com id específico do nó-pai:
	var removido = objPai.removeChild(objFilho);
}

function idade(nascimento, hoje) {
    var diferencaAnos = hoje.getFullYear() - nascimento.getFullYear();
    if ( new Date(hoje.getFullYear(), hoje.getMonth(), hoje.getDate()) < 
         new Date(hoje.getFullYear(), nascimento.getMonth(), nascimento.getDate()) )
        diferencaAnos--;
    return diferencaAnos;
}