const  swiper = new Swiper ('.swiper',{
  loop: true, //ループさせる
  effect: "fade", //フェードのエフェクト
  fadeEffect: { 
  crossFade: true,
},
  autoplay: {
      delay: 10000,//5秒後つぎの画像へ
      disableOnInteraction: false,
  },
  // speed: 2000, //２秒かけながら次の画像へ移動
  allowTouchMove: false, //マウスでのスワイプを禁止
  pagination: { //円形のページネーションを有効にする
      el: ".swiper-pagination",
      clickable: true //クリックを有効にする
  }
});


jQuery(window).on("scroll",function () {
    if (jQuery(this).scrollTop() > 80) {
      jQuery('.page_top').addClass('is-show');
    }else{
      jQuery('.page_top').removeClass('is-show');
    }
    });
jQuery('#js-page-top').click( function () {
  const position = 0;
  const speed = 600;
    jQuery('html,body').animate({scrollTop:position} ,speed);
    return false;
});

jQuery(window).on("scroll",function () {
  const drawerToggle = 600;

  const windowWidth = jQuery(window).innerWidth() ;

  if (jQuery(this).scrollTop() > drawerToggle) {
    jQuery('.drawer_menu_btn').addClass('is-show');
  }
  else if ((jQuery(this).scrollTop() < drawerToggle)&& (windowWidth < 767)) {

  }
  else{
    jQuery('.drawer_menu_btn').removeClass('is-active').removeClass('is-show');
    jQuery('.drawer_content').removeClass('is-active');
    jQuery('.drawer_background').removeClass('is-active');
  }
  });

jQuery('#js-menu-btn').on('click',function() {
  jQuery('.drawer_menu_btn').toggleClass('is-active');
    jQuery('.drawer_content').toggleClass('is-active');
    jQuery('.drawer_background').toggleClass('is-active');
    return false;
});
jQuery('.drawer_background').click(function(){
  jQuery('.drawer_menu_btn').removeClass('is-active');
    jQuery('.drawer_content').removeClass('is-active');
    jQuery('.drawer_background').removeClass('is-active');
});

// jQuery('#js-checked').on('change', function(){
//   if(jQuery(this) === jQuery(this).attr.('checked')) {
//     jQuery(this).prop('checked' , false);
//   }
// });


// const form = jQuery('#js-form');

// form.submit(function(e) { 
//   jQuery.ajax({ 
//    url: form.attr('action'), 
//    data: form.serialize(), 
//    type: "POST", 
//    dataType: "xml", 
//    statusCode: { 
//       0: function() { 
//         //送信に成功したときの処理 
//         form.slideUp();
//         jQuery('#js-success').slideDown();
//       }, 
//       200: function() { 
//         //送信に失敗したときの処理 
//         // $('.js-error').addClass('js-error')
//         form.slideUp();
//         jQuery('#js-error').slideDown();
//       }
//     } 
//   });
//   return false; 
// }); 

// const $submit = $('#js-submit')

// $('js-form input , js-form textarea').on('change' ,function (){
//   if(
//     $('#js-form input[type ="text"]').val() === "" &&
//     $('#js-form input[type ="text"]').val() === "" &&
//     $('#js-textarea').val() === ""
//   ) {
//     $('.js-error').addClass('js-error')
//     $submit.prop('disabled' ,false)

    
//   } else {
//     $submit.prop('disabled' ,true)
    
//   }
  
// })






// window.addEventListener('load', function(){
//     var elem = document.querySelector(".swiper-container");
//     if (elem !== null) { //swiper-containerがあれば…
//     var mySwiper = new Swiper(".swiper-container", {
//       loop: true, //ループさせる
//       effect: "fade", //フェードのエフェクト
//       autoplay: {
//         delay: 4000, //４秒後に次の画像へ
//         disableOnInteraction: false //ユーザー操作後に自動再生を再開する
//       },
//       speed: 2000, //２秒かけながら次の画像へ移動
//       allowTouchMove: false, //マウスでのスワイプを禁止
//       navigation: { //左右のページ送りを有効にする
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev"
//       },
//       pagination: { //円形のページネーションを有効にする
//         el: ".swiper-pagination",
//         clickable: true //クリックを有効にする
//       }
//     });
//   }
// });
