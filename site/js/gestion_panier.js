/*
 * Fonction permettant l'addition d'une valeur avec un pas et une limite basse et haute si renseigne
 */
function addQuantity(input, pas, min, max){
	try{
		if($(input).val() !=undefined &&$(input).val() !=""){
			if(parseInt($(input).val())<=max && parseInt($(input).val())>=min){
				$(input).val(parseInt($(input).val()) + pas);
			}
		}
	}catch(e){
		console.log("erreur à laddition");
	}
}
/*
 * Fonction permettant la soustraction d'une valeur avec un pas et une limite basse et haute si renseigne
 */
function substractQuantity(input, pas, min, max){
	try{
		var mini = parseInt(min);
		var maxi = parseInt(max)
		if($(input).val() !=undefined &&$(input).val() !=""){
			if(parseInt($(input).val())<maxi && parseInt($(input).val())>mini){
				$(input).val(parseInt($(input).val()) - pas);
			}
		}
	}catch(e){
		console.log("erreur à laddition");
	}
}
