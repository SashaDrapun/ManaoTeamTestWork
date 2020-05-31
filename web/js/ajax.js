$( document ).ready(function() {
    $("#submit").click(
		function(){
			sendAjaxForm('ajax_form', '../../php/action_ajax_form.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            console.log(response);
			
				result = $.parseJSON(response);
				if(result.successfulRegistration !== undefined){
					showElement('#successfulRegistration');
				}
				if(result.successfulAutorization !== undefined){
					showElement('#successfulAutorization');
					location.href=location.href;
				}
				if(result.successfulRegistration === undefined &&
					 result.successfulAuthorization === undefined){
						showErrors(result);
				}        	
    	},
    	error: function(response) { // Данные не отправлены
            console.log(response);
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}

function showErrors(result){
	if(result.name !== undefined){
		document.querySelector('#nameErrors').textContent = result.name;
		showElement('#nameErrors');
	}

	if(result.email !== undefined){
		document.querySelector('#emailErrors').textContent = result.email;
		showElement('#emailErrors');
	}
	
	if(result.login !== undefined){
		document.querySelector('#loginErrors').textContent = result.login;
		showElement('#loginErrors');
	}
	
	if(result.password !== undefined){
		document.querySelector('#passwordErros').textContent = result.password;
		showElement('#passwordErros');
	}
	
	if(result.confirmPassword !== undefined){
		document.querySelector('#confirmPasswordErrors').textContent = result.confirmPassword;
		showElement('#confirmPasswordErrors');

	}
}

function showElement(idElement){
	$(idElement).show(1000, function(){
				  setTimeout(function(){
				    $(idElement).hide(500);
				  }, 5000);
				});
}