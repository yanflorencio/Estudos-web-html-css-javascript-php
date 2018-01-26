
function verificaFormulario (form){
    erro = 0;
//VALIDAÇÃO DOS TEXTOS

	    if(!isNaN(form.nome.value) || form.nome.value == ""){
            erro++;			
		}
		
		if(!isNaN(form.pais.value) || form.pais.value == ""){		
            erro++;			
		}
		
		if(!isNaN(form.estado.value) || form.estado.value == ""){
            erro++;			
		}
		
		if(!isNaN(form.municipio.value) || form.municipio.value == ""){
            erro++;			
		}
		
		if(!isNaN(form.data_nascimento.value) || form.data_nascimento.value == ""){
            erro++;			
		}
		
		if(!isNaN(form.escola_ensino.value) || form.escola_ensino.value == ""){
            erro++;			
		}
		
		if(!isNaN(form.estado_ensino.value) || form.estado_ensino.value == ""){
            erro++;				
		}
		
		if(!isNaN(form.municipio_ensino.value) || form.municipio_ensino.value == ""){
            erro++;			
		}		
//END
//VALIDAÇÃO DOS RADIO BUTTONS		
	if(document.formulario.sex[0].checked == false && document.formulario.sex[1].checked == false && document.formulario.sex[2].checked == false){
            erro++;	
	}
	
	if(document.formulario.primeira[0].checked == false && document.formulario.primeira[1].checked == false){
            erro++;
	}
	
	if(document.formulario.nota[0].checked == false && document.formulario.nota[1].checked == false ){
            erro++;
	}
//END
//VALIDAÇÃO DOS SELECTS	
	   for (i=1;i<=20;i++){
			x = document.getElementById(i).value;
			if(x == "") erro++;
	   }
//END   
	   if(erro > 0){
		   alert ("Preencha todos os campos")
		   return false;
	   }else {return true;}
 }