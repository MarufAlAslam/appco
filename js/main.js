$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $('.comingSoon a').click(function(event){
      event.preventDefault()
  })

  $('.chainBtn').click(function(){
      $('.chain').show(400)
      $('.sig').hide(300)
  })

  $('.sigBtn').click(function(){
    $('.chain').hide(300)
    $('.sig').show(400)
})

$('.individualBtn').click(function(){
    $('.individual').show(400)
    $('.team').hide(300)
})

$('.teamBtn').click(function(){
  $('.individual').hide(300)
  $('.team').show(400)
})