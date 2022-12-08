function translate(key, replace = {}) {
    let translation = key.split('.').reduce((t, i) => t[i] || null, window.translations);

    for (var placeholder in replace) {
        translation = translation.replace(`:${placeholder}`, replace[placeholder]);
    }

    return translation;
}

$(document).ready(function () {
    $(".js-btn-submit").on("click", function(e){
        e.preventDefault();
        $(this).closest('form').submit();
    })

    $('.js-btn-delete').on("click", function(){
        confirm(translate('temp.message.sure'));
    })
});
