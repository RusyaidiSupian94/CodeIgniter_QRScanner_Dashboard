jQuery(document).ready(function () {

    $('.summernote-init').summernote({
        height: 150,
        minHeight: null,
        maxHeight: null,
        focus: true,
        dialogsFade: true,
        dialogsInBody: true,
        placeholder:'Your Message Here'
    });
      $('.summernote-airmode').summernote({
       airMode:true
    });
});