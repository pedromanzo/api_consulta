$(document).ready(function(){

  $('#marca').on('change', function(){

    var selectValor = '#'+$(this).val();

    $('#veiculo').children('div').hide();
    $('#veiculo').children(selectValor).show();

  });

  var seletorAbrirModal = $(".jabrirModal");
  var seletorFecharModal = $(".jfecharModal");
  var containerModal = $(".jmodal");

  seletorAbrirModal.click(function(){

    containerModal.fadeToggle(0);

    return false;

  });

  seletorFecharModal.click(function(){

    containerModal.fadeToggle(0);

    return false;

  });
});
