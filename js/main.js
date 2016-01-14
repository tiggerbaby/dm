$('#enqiryform').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('toggle') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  // var modal = $(this)
  // modal.find('.modal-title').text('New message to ' + recipient)
  // modal.find('.modal-body input').val(recipient)
})

$(function(){

	var newTags = [];

	if(inputTags !== ""){
		newTags = inputTags.split(',');
	}
	new Taggle("tags",{
		tags : newTags,
		hiddenInputName: 'tags[]'

	});

});



$(document).ready(function(){

    var form = document.getElementById("form");
    form.noValidate = true;
    console.log(form);
    

    $(form).on('submit', function(e){
        
        var elements = this.elements;
        console.log(elements);
        var isValid;

        for (var i = 0; i < (elements.length-1); i++) {
            isValid = validateRequired(elements[i]);
            if( ! isValid) {
                showErrorMessage(elements[i]);
                e.preventDefault();
            } else {
                removeErrorMessage(elements[i]);
            }
        }
    });
    function validateRequired(el){
        if(isRequired(el)){
            var valid = ! isEmpty(el);
            if ( ! valid) {
                setErrorMessage(el, 'field is required');
            }
            return valid;
        }
        return true;
    }

    function isRequired(el){
        return ((typeof el.required === 'boolean') && el.required) ||
                (typeof el.required === 'string');
    }

    function isEmpty(el){
        return ! el.value || el.value === el.placeholder;
    }
    function isEmail(el){
       var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
    }
    function setErrorMessage(el, message){
        $(el).data('errorMessage', message);
    }
    function showErrorMessage(el, message){
        var $el = $(el);
        var $errorContainer = $el.siblings('.error');

        if( ! $errorContainer.length){
            $errorContainer = $('<span class="error"></span>').insertAfter($el);
        }
            $errorContainer.text($(el).data('errorMessage'));
    }
});