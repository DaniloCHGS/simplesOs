class AcessoController {
    constructor(){
        this._locale = 'pt-Bt';
        this._dataEl = document.querySelector("#data");
        this._horaEl = document.querySelector("#hora");
        this.initialize();
    }
    initialize(){
        this.atualizaDataHora();
        setInterval(()=>{
            this.atualizaDataHora();
        }, 1000);
        console.log("teste");
    }
    novaData(){
		return new Date(); 
    }
    atualizaDataHora(){
		this._dataEl.innerHTML = this.novaData().toLocaleDateString(this._locale);
		this._horaEl.innerHTML = this.novaData().toLocaleTimeString(this._locale);
	}
}