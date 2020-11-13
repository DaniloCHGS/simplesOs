class ConfiguracaoController {
    constructor(){
        this._show = false;
        this._locale = 'pt-Bt';
        this._dataEl = document.querySelector("#data");
        this._horaEl = document.querySelector("#hora");
        this._senhaBtnEl = document.querySelector("#senhaAdd");
        this._senhaEl = document.querySelector("#senhaRegistro");
        this._btnAddEl = document.querySelector("#btnAdd");
        this._painelEditEl = document.querySelector("#painelEdit");
        this._pesquisaUsuarioEl = document.querySelector("#pesqUser");
        this._pesquisaUsuarioCampEl = document.querySelector("#pesqUserCamp");
        this.initialize();
    }
    initialize(){

        this.atualizaDataHora();
        setInterval(()=>{
            this.atualizaDataHora();
        }, 1000);
        this._pesquisaUsuarioEl.addEventListener('click', ()=>{
            //this._painelEditEl.style.display = 'block';
        });
        //this._painelEditEl.style.display = 'none';
    }
    novaData(){
		return new Date(); 
    }
    atualizaDataHora(){
		this._dataEl.innerHTML = this.novaData().toLocaleDateString(this._locale);
		this._horaEl.innerHTML = this.novaData().toLocaleTimeString(this._locale);
    }
}