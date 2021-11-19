$(function () {
  
  // 変数定義
  var list    = $("#cardlist li");
  var card1,card2;
  var num1,num2;
  var first = 1;
  var liarr  = [];
  var flag   = 0;
  
  // カードをシャッフルして、マウスオーバーをon関数で実行
  cardSort();
  cardHover();
  
  // カードリストを取得して配列に格納、ランダムに並び替えた後に再度appendしなおす関数
  function cardSort() {
      // 配列を空にする、flagを0にする
      liarr.length = 0;
      flag   = 0;
      // listの中のhtmlを配列に格納
      list.each(function() {
          liarr.push($(this).html());
      });
      // 格納した配列をランダムにする
      liarr.sort(function() {
          return Math.random() - Math.random();
      });
      // ulの中身をいったん削除
      $("#cardlist ul").empty();
      // ランダムになった配列をappendする
      for(i=0; i < liarr.length; i++) {
        $("#cardlist ul").append('<li>' + liarr[i] + '</li>');
      }
      // フェードイン
      $("#cardlist ul li").animate({"opacity":"1"}, 500, "easeOutQuart")
  }
  
  // カードのマウスオーバー関数
  function cardHover() {
      $("#cardlist li").on({
          'mouseenter':function(){
              if ( !$(this).is(".selected") ) {
                 $(this).animate({"top": "0px"}, 200, "easeOutQuart");
              }
          },
          'mouseleave':function(){
                  $(this).animate({"top": "0px"}, 200, "easeOutQuart");
          }
      });
  }
  
  // カードのクリックでしんけんすいじゃくをする
  jQuery(document).on("click", "#cardlist li", function(){
      if ( !$(this).is(".selected") ) {
          
          // クリックしたlistにselectedを付与してカードをひっくり返す
          $(this).addClass("selected");
          var linum = $("#cardlist li").index(this);
          cardRotate1(linum);
          
          // 1枚目と2枚目で処理を分岐
          if ( first == 1 ) {
              // 1枚目のカードのclassと何番目かを取得して、ひくセット枚数を+1する
              card1 = $(this).children(".ura").children("img").attr("class");
              num1  = $("#cardlist li").index(this);
              first++;
          } else {
              // 2枚目のカードのclassと何番目かを取得して、ひくセット枚数を1にもどす
              card2 = $(this).children(".ura").children("img").attr("class");
              num2  = $("#cardlist li").index(this);
              first = 1;
              // 1枚目と2枚目のカードが同じだったらflagを増やす、違ったらカードをもどす
              if ( card1 == card2 ) {
                  flag++;
              } else if ( card1 != card2 ){
                  setTimeout(function(){
                      cardRotate2(num1);
                      cardRotate2(num2);
                  } , 800);
              }
              // すべてのカード合わせが終わったら「もう一度やる」ボタンを表示
              if ( flag == "6" ) {
                  $("#atrboxtxt2").show().animate({"opacity": "1"}, 500, "easeOutQuart");
              }
          }
          
      }
  });
  
  // カードめくり用関数
  function cardRotate1(linum) {
          $("#cardlist li").eq(linum).children(".omote").css("-webkit-transform" , "perspective(500) rotateY(-90deg)");
          $("#cardlist li").eq(linum).children(".omote").css("-moz-transform" , "perspective(500px) rotateY(-90deg)");
          $("#cardlist li").eq(linum).children(".omote").css("transform" , "perspective(500px) rotateY(-90deg)");
          setTimeout(function(){
              $("#cardlist li").eq(linum).children(".ura").css("-webkit-transform" , "perspective(500) rotateY(0deg)");
              $("#cardlist li").eq(linum).children(".ura").css("-moz-transform" , "perspective(500px) rotateY(0deg)");
              $("#cardlist li").eq(linum).children(".ura").css("transform" , "perspective(500px) rotateY(0deg)");
          } , 300);
  }
  
  // カードもどし用関数
  function cardRotate2(linum) {
          $("#cardlist li").eq(linum).children(".ura").css("-webkit-transform" , "perspective(500) rotateY(90deg)");
          $("#cardlist li").eq(linum).children(".ura").css("-moz-transform" , "perspective(500px) rotateY(90deg)");
          $("#cardlist li").eq(linum).children(".ura").css("transform" , "perspective(500px) rotateY(90deg)");
          setTimeout(function(){
              $("#cardlist li").eq(linum).children(".omote").css("-webkit-transform" , "perspective(500) rotateY(0deg)");
              $("#cardlist li").eq(linum).children(".omote").css("-moz-transform" , "perspective(500px) rotateY(0deg)");
              $("#cardlist li").eq(linum).children(".omote").css("transform" , "perspective(500px) rotateY(0deg)");
          } , 300);
          $("#cardlist li").eq(linum).removeClass("selected");

  }
  
  // もう一回
  $("#atrboxtxt2").click(function(){
      cardSort();
      cardHover();
      $("#atrboxtxt2").hide().css("opacity","0");
  });
  
  
});