jQuery(document).ready(function($){

	//закрытие модального окна
	$('.close_modal').click(function (){
		$('.popup, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal624').click(function (){
		$('.popup624, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup624 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal623').click(function (){
		$('.popup623, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup623 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal622').click(function (){
		$('.popup622, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup622 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal621').click(function (){
		$('.popup621, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup621 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal620').click(function (){
		$('.popup620, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup620 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal619').click(function (){
		$('.popup619, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup619 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal618').click(function (){
		$('.popup618, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup618 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal617').click(function (){
		$('.popup617, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup617 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	$('.close_modal616').click(function (){
		$('.popup616, .popup2').css({'opacity':'0', 'visibility':'hidden', 'z-index':'-1'});
		$('.popup616 > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.wpforms-field-container').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".wpforms-field-container input[type=submit]").attr('disabled','disabled');
	});
	//показ модального окна1
	$('.open_modal').click(function (e){
		e.preventDefault();
		$(".popup").css({'opacity':'1', 'visibility':'visible', 'z-index':'999'});
	});
		//показ модального окна 1 - 9
	$("#open_modal1").click(function (e){
		e.preventDefault();
		$(".popup624").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal2").click(function (e){
		e.preventDefault();
		$(".popup623").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal3").click(function (e){
		e.preventDefault();
		$(".popup622").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal4").click(function (e){
		e.preventDefault();
		$(".popup621").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal5").click(function (e){
		e.preventDefault();
		$(".popup620").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal6").click(function (e){
		e.preventDefault();
		$(".popup619").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal7").click(function (e){
		e.preventDefault();
		$(".popup618").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal8").click(function (e){
		e.preventDefault();
		$(".popup617").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
	$("#open_modal9").click(function (e){
		e.preventDefault();
		$(".popup616").css({'opacity':'1', 'visibility':'visible', 'z-index':'998'});
	});
});
