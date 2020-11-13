class OrdemServicoController {

	constructor(){
		this._nomeEl = document.querySelector("#nome");
		this._cpfEl = document.querySelector("cpf");
		this._telefoneEl = document.querySelector("#telefone");
		this._enderecoEl = document.querySelector("#endenreco");
		this._descricaoEl = document.querySelector("#descricao");
		this._executadoEl = document.querySelector("#executado");
		this._dataEl = document.querySelector("#data");
		this._horaEl = document.querySelector("#hora");
		this._locale = 'pt-Br';
		this.initialize();
	}
	initialize(){
		this.atualizaDataHora();
		setInterval(()=>{
			this.atualizaDataHora();
		}, 1000);
	}
	novaData(){
		return new Date(); 
	}
	atualizaDataHora(){
		this._dataEl.innerHTML = this.novaData().toLocaleDateString(this._locale);
		this._horaEl.innerHTML = this.novaData().toLocaleTimeString(this._locale);
	}
	limparOs(){
		let limpo = "";
		this.setNome(limpo);
		this.setCpf(limpo);
		this.setTelefone(limpo);
		this.setEndereco(limpo);
		this.setDescricao(limpo);
		this.setExecutado(limpo);
	}
	addEventListenerAll(element, events, f){
		events.split(' ').forEach(event => {
			element.addEventListener(event, f);
		});
	}
	get getNome(){
		return this._nomeEl.value;
	}
	set setNome(value){
		this._nomeEl.value = value;
	}
	get getCpf(){
		return this._cpfEl.value;
	}
	set setCpf(value){
		this._cpfEl.value = value;
	}
	get getTelefone(){
		return this._telefoneEl.value;
	}
	set setTelefone(value){
		this._telefoneEl.value = value;
	}
	get getEndereco(){
		return this._enderecoEl.value;
	}
	set setEndereco(value){
		this._enderecoEl.value = value;
	}
	get getDescricao(){
		return this._descricaoEl.value;
	}
	set setDescricao(value){
		this._descricaoEl.value = value;
	}
	get getExecutado(){
		return this._executadoEl.value;
	}
	set setExecutado(value){
		this._executadoEl.value = value;
	}

}