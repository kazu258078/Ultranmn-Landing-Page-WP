 function shopify_dispaly(){
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'ultranmn-jp.myshopify.com',
      storefrontAccessToken: 'e722f8662dcaefd88779db1a61cc85cf',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
     
      ui.createComponent('product', {
        id: '5718755344552',
        node: document.getElementById('product-component-1599108119609'),
        moneyFormat: '%C2%A5%7B%7Bamount_no_decimals%7D%7D',
        options: {
            "product": {
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "calc(25% - 20px)",
                    "margin-left": "20px",
                    "margin-bottom": "50px"
                  }
                },
                "button": {
                  "font-size": "16px",
                  "font-weight": "bold",
                  "padding-top": "12px",
                  "padding-bottom": "12px",
                  ":hover": {
                    "background-color": "#0c35bc"
                  },
                  "background-color": "#0d3bd1",
                  ":focus": {
                    "background-color": "#0c35bc"
                  },
                  "border": "1px solid rgba(195,195,195)",
                  "border-radius": "0px",
                  "max-width": "288px",
                  "width": "100%",
                  "height": "46px",
                  "display": "none",
                },
                "quantityInput": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px"
                }
              },
              "buttonDestination": "checkout",
              "contents": {
                "img": false,
                "title": false,
                "price": false
              },
              "text": {
                "button": "お申込み情報登録へ"
              }
            },
            "productSet": {
              "styles": {
                "products": {
                  "@media (min-width: 601px)": {
                    "margin-left": "-20px"
                  }
                }
              }
            },
            "modalProduct": {
              "contents": {
                "img": false,
                "imgWithCarousel": true,
                "button": false,
                "buttonWithQuantity": true
              },
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "100%",
                    "margin-left": "0px",
                    "margin-bottom": "0px"
                  }
                },
                "button": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#0c35bc"
                  },
                  "background-color": "#0d3bd1",
                  ":focus": {
                    "background-color": "#0c35bc"
                  },
                  "border-radius": "0px",
                  "padding-left": "100px",
                  "padding-right": "100px"
                },
                "quantityInput": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px"
                }
              },
              "text": {
                "button": "Add to cart"
              }
            },
            "cart": {
              "styles": {
                "button": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#0c35bc"
                  },
                  "background-color": "#0d3bd1",
                  ":focus": {
                    "background-color": "#0c35bc"
                  },
                  "border-radius": "0px"
                }
              },
              "text": {
                "total": "Subtotal",
                "button": "Checkout"
              },
              "popup": false
            },
            "toggle": {
              "styles": {
                "toggle": {
                  "background-color": "#0d3bd1",
                  ":hover": {
                    "background-color": "#0c35bc"
                  },
                  ":focus": {
                    "background-color": "#0c35bc"
                  }
                },
                "count": {
                  "font-size": "16px"
                }
              }
            }
          },
      });
      // jQuery(".contact-send").hide();
    });
  }
}



jQuery(document).ready(function() {
    shopify_dispaly()
    jQuery('.contact-send input[type="button"]').prop("disabled", true);
    jQuery('.checkbox-error').text("チェックボタンをクリックしてください。");
    var tel_value_1 = false;
    var tel_value_2 = false;
    var tel_value_3 = false;
    jQuery('input.agreement-number').on("blur", function(){
        jQuery('.tel-error').empty()
        tel_1 = jQuery.trim(jQuery("#tel-1").val())
        if(tel_1 == "" || tel_1 == undefined){
          tel_1 = false
        }
        tel_2 = jQuery.trim(jQuery("#tel-2").val())
        if(tel_2 == "" || tel_2 == undefined){
          tel_2 = false
        }
        tel_3 = jQuery.trim(jQuery("#tel-3").val())
        if(tel_3 == "" || tel_3 == undefined){
          tel_3 = false
        }
        if(!tel_1 == false){
          jQuery("input[id='tel-1']").css("background-color","#fff")
          tel_value_1 = true
        }else{
          jQuery("input[id='tel-1']").css("background-color","rgba(226, 217, 217)")
          tel_value_1 = false
        }
        if(!tel_2 == false){
          jQuery("#tel-2").css("background-color","#fff")
          tel_value_2 = true
        }else{
          jQuery("#tel-2").css("background-color","rgba(226, 217, 217)")
          tel_value_2 = false
        }
        if(!tel_3 == false){
          jQuery("#tel-3").css("background-color","#fff")
          tel_value_3 = true
        }else{
          jQuery("#tel-3").css("background-color","rgba(226, 217, 217)")
          tel_value_3 = false
        }
        tel_validatoin(tel_1, tel_2, tel_3);
    })

    jQuery("input[type='checkbox']").on("click", function(){
      if(jQuery(this).is(":checked")){
        jQuery("head").append(jQuery(
          '<style id="check-style">' + 
            '.wpcf7-list-item-label::before{ background-color: #FFFFFF }' + 
            '.wpcf7-list-item-label::after{' +
               '-webkit-transform: translateY(-50%) rotate(-45deg);' + 
               'border-bottom: 3px solid #0D3BD1;'+
               'border-left: 3px solid #0D3BD1;'+
               'border-bottom-width: 5px;'+
               'border-left-width: 5px;'+
               'content: "";'+
               'display: block;'+
               'margin-top: -0.2em;'+
               'opacity: 1;'+
               'position: absolute;'+
               'top: 50%;'+
               'transform: translateY(-50%) rotate(-45deg);'+
               'left: 3px;'+
               'height: 11px;'+
               'width: 19px; }</style>'
          ));
        jQuery('.checkbox-error').css("visibility","hidden");
        tel_1 = jQuery.trim(jQuery("#tel-1").val())
        if(tel_1 == "" || tel_1 == undefined){
          tel_1 = false
        }
        tel_2 = jQuery.trim(jQuery("#tel-2").val())
        if(tel_2 == "" || tel_2 == undefined){
          tel_2 = false
        }
        tel_3 = jQuery.trim(jQuery("#tel-3").val())
        if(tel_3 == "" || tel_3 == undefined){
          tel_3 = false
        }
        if(tel_1 == false && tel_2 == false && tel_value_3 == false){
          jQuery('.contact-send input[type="button"]').prop("disabled", true);
        }else{
          tel_validatoin(tel_1, tel_2, tel_3);
        }
      }else{
        jQuery("#check-style").remove()
        jQuery('.checkbox-error').css("visibility","visible");;
        jQuery('.contact-send input[type="button"]').prop("disabled", true);
        jQuery(".contact-send input").css({
          "background-color":"#fff",
          "color":"rgba(175,178,187)",
        })
      }
      


      jQuery(".submit-form").on("click", function(e){
        var now = new Date();
        var y = now.getFullYear();
        var m = now.getMonth() + 1;
        var d = now.getDate();
        var w = now.getDay();
        var wd = ['日', '月', '火', '水', '木', '金', '土'];
        var h = now.getHours();
        var mi = now.getMinutes();
        var s = now.getSeconds();
        jQuery(".wpcf7-hidden").val(y + '年' + m + '月' + d + '日' + h + '時' + mi + '分' + s + '秒' + '(' + wd[w] + ')');
        var buy_btn = jQuery("iframe").contents().find(".shopify-buy__btn");
        jQuery(".wpcf7-form").submit();
        buy_btn.trigger("click");
      });

    })

    
});


// function shopify_btn_display(tel_value_1, tel_value_2, tel_value_3){

//   var checkbox_value = jQuery("input[type='checkbox']").is(":checked")
//   var phone_value = false
//   if(tel_value_1 == true && tel_value_2 == true && tel_value_3 == true){
//     phone_value = true
//   }
//   if(checkbox_value == true && phone_value ==true){
//     if(jQuery('#product-component-1599108119609').is(':empty')){ 
//       shopify_dispaly();
//     }else{
//       jQuery(".contact-send").hide();
//       jQuery(".shopify-btn").show();
//     }
//   }else{
//     jQuery(".contact-send").show();
//     jQuery("#product-component-1599108119609").empty();
//   }

// }


function tel_validatoin(tel_1, tel_2, tel_3){
  if(tel_1 == false && tel_1 != "0"){
    tel_1 = ""
  }
  if(tel_2 == false){
    tel_2 = ""
  }
  if(tel_3 == false){
    tel_3 = ""
  }
  var tel_validation = `${tel_1}` + `${tel_2}` + `${tel_3}`
  
  var re = new RegExp("^0[0-9]{9,10}$");
  if (re.test(tel_validation)) {
    var checkbox_boolean = checkbox_validatoin()
    if(checkbox_boolean){
      jQuery(".contact-send input").css({
        "background-color":"#0c35bc",
        "color":"#fff",
      })
    }
  } else {
      jQuery('.tel-error').text("無効な電話番号です。");
      jQuery('.contact-send input[type="button"]').prop("disabled", true);
      jQuery(".contact-send input").css({
        "background-color":"#fff",
        "color":"rgba(175,178,187)",
      })
  }
}

function checkbox_validatoin(){
  if(jQuery("input[type='checkbox']").is(":checked")){
    jQuery('.contact-send input[type="button"]').prop("disabled", false);
    return true
  }else{
    jQuery('.contact-send input[type="button"]').prop("disabled", true);
    return false
  }
}


