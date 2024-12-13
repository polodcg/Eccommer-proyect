/*=============================================
Validación de formularios desde bootstrap
=============================================*/

// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

/*=============================================
Activar select 2
=============================================*/

if($('.select2').length > 0){

  $('.select2').select2({
    width: '100%',
    theme: 'bootstrap4'   
  });

}

/*=============================================
Activar Tags Input
=============================================*/

if($('.tags-input').length > 0){

  $('.tags-input').tagsinput();

}

/*=============================================
Activar datetimepicker
=============================================*/

if($('.datepicker').length > 0){

  /*=============================================
  Activar datetimepicker para fechas
  =============================================*/

  $('.datepicker').datetimepicker({
    timepicker:false,
    format:'Y-m-d'
  })

}

if($('.timepicker').length > 0){

  /*=============================================
  Activar datetimepicker para tiempo
  =============================================*/

  $('.timepicker').datetimepicker({
    datepicker:false,
    format:'H:i'
  })

}

if($('.datetimepicker').length > 0){

  /*=============================================
  Activar datetimepicker para fecha y tiempo
  =============================================*/

  $('.datetimepicker').datetimepicker({
    format:'Y-m-d H:i'
  })

}

/*=============================================
Summernote
=============================================*/

if($('.summernote').length > 0){

  $('.summernote').summernote({
    minHeight: 300,
    prettifyHtml:false,
    followingToolbar: true,
    codemirror: { // codemirror options
        mode: "text/html",
        styleActiveLine: true,
        lineNumbers: true,
        lineWrapping: true,
        theme: "monokai"
    },
    toolbar:[
      ['misc', ['codeview', 'undo', 'redo']],
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['para', ['style', 'ul', 'ol', 'paragraph', 'height']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['insert', ['link','picture', 'hr','video','table','emoji']],
    ]

  })

}

/*=============================================
Adicionar iconos al toolbar de summernote
=============================================*/
if($(".note-toolbar").length > 0){

  $(".emoji-picker").removeClass("fa");
  $(".emoji-picker").removeClass("fa-smile-o");

  $(".emoji-picker").addClass("far");
  $(".emoji-picker").addClass("fa-smile");

}

/*=============================================
Ajustes al modal de Summernote
=============================================*/

if($(".note-modal[aria-label='Insert Image']").length > 0){

  $(".note-modal[aria-label='Insert Image']").find(".close").attr("data-bs-dismiss","modal");
  $(".note-modal[aria-label='Insert Image']").find(".note-group-select-from-files").remove();
   
}

if($(".note-modal[aria-label='Insert Video']").length > 0){

  $(".note-modal[aria-label='Insert Video']").find(".close").attr("data-bs-dismiss","modal");
   
}
