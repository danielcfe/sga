$(document).on('ready',function(){
  $('button.show').on('click',function(){
    var $this = $(this);
    var selector_template = $this.data('template');
    var template = $(selector_template).html();
    $('.data_form').append(template);
  });
});