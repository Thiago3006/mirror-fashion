$('[name=tamanho]').on('input', function() {
    $('[name=valortamanho]').val(this.value);
});

/*Para suportar o IE10 ative esse código
 $('[name=tamanho]').on('change input',function(){
    $('[name=valortamanho').text(this.value);
}); */

