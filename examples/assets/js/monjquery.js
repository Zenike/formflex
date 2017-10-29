function replace_name(){
	$("[data-group] input").each(function(){
		$(this).val($(this).attr("name"));
	});
};

$(".replace_names_link").click(function(){
	replace_name();
});















$("pre, blockquote").on("click","span",function(){
	target = $(this).parents("pre, blockquote");

	if(target.is(".selected")){
		target.removeClass("selected");
	}else{
		target.addClass("selected");
	}
});







$(document).ready(function() {
	$("pre").each(function(){
		$(this).append('<span>code <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
	$("blockquote").each(function(){
		$(this).append('<span>infos <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
});









// JQUERY VALIDATE
$(document).ready(function () {
    $("form").validate();
});

jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

var form = $("form");

$("#test_form").click(function () {
    if (form.valid()) {
        var index_page = $(this).closest(".page").index() + 1;

        $(".page").removeClass("active");
        $(".page:nth-child(" + (index_page + 1) + ")").addClass("active");

        $('html,body').scrollTop(0);
    } else {
        $('.customErrorValidation').show();
    }
});

function initValidation($form) {
    $form.validate({
        errorPlacement: function (error, element) {

            $error = $(element).parent().find('.customErrorValidation').first();
            if ($error.length == 0) {
                $error = $(element).parent().parent().find('.customErrorValidation').first();
            }

            errorStr = "";
            if (error.html() != "") {
                errorStr = "<span><i class=\"fa fa-caret-down arrow\"></i>" + error.html() + "<i class = \"fa fa-info-circle info\"></i></span>";
            }
            $error.html(errorStr);
        },
        success: function (error) {
            error.remove();
        }
    });
}

$('form').each(function () {
    initValidation($(this));
});

$(".customErrorValidation").each(function () {

    if ($(this).parents(".label,label").length == 1) {
        var conteneur = $(this).parents(".label,label");
    } else {
        var conteneur = $(this).parents(".lane, fieldset");
    }

    var input = conteneur.find("input, select, textarea");

    var deca_left = input.offset().left - conteneur.offset().left;
    var deca_top = input.offset().top - 21 - conteneur.offset().top;

    $(this).css({
        left: deca_left + "px",
        top: deca_top + "px",
    });
});
