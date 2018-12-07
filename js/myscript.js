window.onload = function () {


  // indicator variables
  let menuOpen = false;
  let shopMenuOpen = false;

  // indicator variables front page
  let slideShowPaused = false;
  let timer;
  let currentSlide = 1;

  // indicator variables
  let messageOn = false;
  let resultMessageContainer;
  let absoluteFilter = false;



  // menu items
  const layerOne = document.querySelector('.layer1');
  const layerTwo = document.querySelector('.layer2');
  const layerThree = document.querySelector('.layer3');
  const hamburgerMenu = document.querySelector('.header-hamburger');
  const modal = document.querySelector('.nav-modal');
  const modalContent = document.querySelectorAll('.nav-modal-content p');
  const modalHeader = document.querySelector('.nav-modal-content h1');

  // shop menu items
  const shopIcon = document.querySelector('.header-cart-nav i');
  const shopModal = document.querySelector('#nav-shop');
  const shopModalContent = document.querySelectorAll('#nav-shop-content p');
  const shopModalHeader = document.querySelectorAll('#nav-shop-content h1');

  // filter
  var filter = document.querySelector(".woof_sid_auto_shortcode");
  var sideMenu = document.querySelector('.elbe-side-menu');




  // navbar backgroundcolor change
  // const changeNavBackground = () => {
  //   const bodyOffset = document.body.scrollTop || document.documentElement.scrollTop;
  //   const navigation = document.querySelector('.header-text-content');
  //
  //   bodyOffset > 0 ? navigation.classList.add('header-text-move') : navigation.classList.remove('header-text-move');
  // }
  //
  // window.addEventListener('scroll', () => {
  //   changeNavBackground();
  // })

  // When the user scrolls the page, execute myFunction
  const sideNavChanges = () => {
    window.addEventListener('scroll', sideNavAdjust);
  }



  const sideNavAdjust = () => {

    var footer = document.querySelector("footer");
    var footerOffset = getOffsetTop(footer);

    var pageHeight = document.body.offsetHeight;
    var viewportHeight = window.innerHeight;

    var filter = document.querySelector('.woof_sid_auto_shortcode');
    var sideMenu = document.querySelector('#elbe-side-menu');


    // var bottomPart = viewportHeight - 145 - sideMenuHeight - 50;
    var navHeight = document.querySelector('.header-text-content').offsetHeight;

    if (sideMenu) {
      var sideMenuHeight = sideMenu.offsetHeight;
      if (window.pageYOffset < 145 - navHeight) {
        sideMenu.className = '';
        sideMenu.classList.add("elbe-side-menu");
      }

      else if (window.pageYOffset >= 40 - navHeight && window.pageYOffset < footerOffset - viewportHeight - 40) {
        sideMenu.className = '';
        sideMenu.classList.add("elbe-fixed-side");

      } else if (window.pageYOffset >= footerOffset - viewportHeight - 40) {
        sideMenu.className = '';
        sideMenu.classList.add("elbe-absolute-side");
        // sideMenu.classList.remove("elbe-fixed-side");
      }
    } else if (filter) {
        var filterHeight = filter.offsetHeight;
        var filterTop = filter.offsetTop;
        console.log(filterTop);
        console.log(filterHeight);
        var bottomPart = viewportHeight - filterTop - filterHeight;
        // include the 2.992em and 3em margins
        var margins = (2.992 * 16) + (3*16);


        if (window.pageYOffset >= footerOffset - viewportHeight + bottomPart - margins) {

          filter.classList.add("elbe-absolute");
          filter.style.top = '166px';
          // absoluteFilter = true;

        } else if(window.pageYOffset < footerOffset - viewportHeight + bottomPart - margins) {
          filter.classList.remove("elbe-absolute");
          // filter.classList.add('woof_sid_auto_shortcode');
          // absoluteFilter = false;



        }
    }

  }






    // window.onscroll = function() {stickyNav()};
    //
    //
    //     // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    //     function stickyNav() {
    //
    //
    //       var footer = document.querySelector("footer");
    //       var footerOffset = getOffsetTop(footer);
    //       // var footerHeight = footer.offsetHeight;
    //
    //       var pageHeight = document.body.offsetHeight;
    //       var viewportHeight = window.innerHeight;
    //
    //
    //       var filter = document.querySelector('.woof_sid_auto_shortcode');
    //       var sideMenu = document.querySelector('#elbe-side-menu');
    //
    //       if (filter) {
    //         var filterHeight = filter.offsetHeight;
    //         var bottomPart = viewportHeight - 145 - filterHeight - 140;
    //         if (window.pageYOffset >= footerOffset - viewportHeight + bottomPart) {
    //           filter.classList.add("elbe-absolute");
    //
    //         } else {
    //           filter.classList.remove("elbe-absolute");
    //
    //
    //         }
    //       } else if (sideMenu) {
    //         // 145 is the space above the menu, 50 is the space between footer and page-content
    //         var sideMenuHeight = sideMenu.offsetHeight;
    //         var bottomPart = viewportHeight - 145 - sideMenuHeight - 50;
    //         var navHeight = document.querySelector('.header-text-content').offsetHeight;
    //
    //         if (window.pageYOffset < 144 - navHeight) {
    //           sideMenu.className = '';
    //
    //           sideMenu.classList.add("elbe-side-menu");
    //         }
    //
    //         else if (window.pageYOffset >= 144 - navHeight) {
    //           sideMenu.classList.add("elbe-fixed-side");
    //           sideMenu.classList.remove("elbe-side-menu");
    //
    //         } else if (window.pageYOffset >= footerOffset - viewportHeight + bottomPart - 145 - 50) {
    //
    //           sideMenu.classList.add("elbe-absolute-side");
    //           sideMenu.classList.remove("elbe-fixed-side");
    //           // fixedSideMenu = false;
    //
    //         } else if (window.pageYOffset < footerOffset - viewportHeight + bottomPart) {
    //             sideMenu.classList.remove("elbe-absolute-side");
    //             sideMenu.classList.add("elbe-side-menu");
    //         }  else {
    //             sideMenu.classList.remove("elbe-absolute-side");
    //
    //           }
    //
    //
    //       }
    //     }


  var getOffsetTop = function (elem) {

  	// Set our distance placeholder
  	var distance = 0;

  	// Loop up the DOM
  	if (elem.offsetParent) {
  		do {
  			distance += elem.offsetTop;
  			elem = elem.offsetParent;
  		} while (elem);
  	}

  	// Return our distance
  	return distance < 0 ? 0 : distance;
  };





 // CONTACT FORM SUBMIT

  const contactFormSubmit = () => {
    const submitButton = document.querySelector('#contact-submit');


    document.addEventListener('click', e => {
      if (e.target == submitButton) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        checkForm(name, email, message);
      }
    })
  }


  const checkForm = (name, email, message) => {
    if (name && message && email) {
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {

            jQuery.ajax({
               url: `<?php echo admin_url('admin-ajax.php'); ?>`,
               type: "POST",
               cache: false,
               data:{
                  action: 'send_email',
                  name: name,
                  email: email,
                  message: message,
                    },
               success:function(res){
        			   alert("Email Sent.");
        			  }
            });

        printMessage('success', 'Thank you for you email. We will get back to you as soon as we can');
      } else {
        // console.log('email is not in the correct form');
        printMessage('error', 'email is not in the correct form')
      }
    } else {
      printMessage('error', 'Make Sure all fields are filled out')
    // console.log('Make Sure all fields are filled out');
    }
  }

  const printMessage= (outcome, message) => {
    if (!messageOn) {
      resultMessageContainer = document.createElement('div');
      resultMessageContainer.classList.add('message-container');
      pageContent = document.querySelector('.contact-container');
      document.body.insertBefore(resultMessageContainer, pageContent);
    } else {
      resultMessageContainer.innerHTML = '';
    }

    if (outcome == 'success') {
      resultMessageContainer.innerHTML = `<p>${outcome}!</p> <p>${message}<p>`;
      resultMessageContainer.classList.remove('error');
      resultMessageContainer.classList.add('success');
      console.log('SUCCESS');
      messageOn = true;
    } else if (outcome == 'error') {
      resultMessageContainer.innerHTML = `<p>${outcome}!</p> <p>${message}<p>`;
      resultMessageContainer.classList.remove('success');
      resultMessageContainer.classList.add('error');
      console.log('failure');
      messageOn = true;
    }
  }











  // toggle Main Menu
  const toggleMenu = () => {
    document.addEventListener('click', e => {
      if (menuOpen == false && e.target == hamburgerMenu || e.target == layerTwo || e.target == layerOne || e.target == layerThree) {

        if (shopMenuOpen) {
          closeShopMenu();
          console.log('shop menu closed');
        }

        openMenu();
      } else if (menuOpen == true && e.target == hamburgerMenu || e.target == modal) {
        closeMenu();
      }
     })
    }
    // open main menu
  const openMenu = () => {

    layerOne.style.transform = 'rotate(43deg)';
    layerTwo.style.opacity = 0;
    layerThree.style.transform = 'rotate(-43deg) translateY(6px) translateX(-4px)';

    modal.style.height = '100vh';
    menuOpen = true;
    layerOne.style.backgroundColor = '#ff4500';
    layerThree.style.backgroundColor = '#ff4500';
    modalHeader.style.display = 'block';

    for (var i = 0; i < modalContent.length; i++) {
      modalContent[i].style.display = 'block';
    }

  }
  // close main meu
  const closeMenu = () => {
    layerTwo.style.opacity = '100';
    layerOne.style.transform = 'rotate(0)';
    layerThree.style.transform = 'rotate(0)';
    modal.style.height = '0';
    menuOpen = false;
    layerOne.style.backgroundColor = 'white';
    layerThree.style.backgroundColor = 'white';
    modalHeader.style.display = 'none';

    for (var i = 0; i < modalContent.length; i++) {
      modalContent[i].style.display = 'none';
    }
  }
  // toggle shop menu
  const toggleShopMenu = () => {

    document.addEventListener('click', e => {

      if (shopMenuOpen == false && e.target == shopIcon) {

        if (menuOpen) {
          closeMenu();
          // console.log('main menu closed');
        }

        openShopMenu();


      } else if (shopMenuOpen == true && e.target == shopIcon || e.target == shopModal) {
        closeShopMenu();

      }
     })
    }
    // open shop menu
    const openShopMenu = () => {
      shopModal.style.height = '100vh';

      for (var i = 0; i < shopModalHeader.length; i++) {
        shopModalHeader[i].style.display = 'block';
      }
      shopIcon.style.color = '#ff4500';
      shopMenuOpen = true;

      for (var i = 0; i < shopModalContent.length; i++) {
        shopModalContent[i].style.display = 'block';
      }
    }


    // close shop menu
    const closeShopMenu = () => {
      shopModal.style.height = '0';

      for (var i = 0; i < shopModalHeader.length; i++) {
        shopModalHeader[i].style.display = 'none';
      }
      shopIcon.style.color = 'white';
      shopMenuOpen = false;

      for (var i = 0; i < shopModalContent.length; i++) {
        shopModalContent[i].style.display = 'none';
      }
    }



    // all pages javscript
    const moveDown = () => {
      downArrow = document.querySelector('.arrow-down');
      if (downArrow) {
        const bannerHeight = document.querySelector('.banner').offsetHeight;
        const navHeight = document.querySelector('.header-text-content').offsetHeight;
        const sectionPosition = bannerHeight - navHeight ;
        downArrow.addEventListener('click', e => {

          window.scrollTo({
            'behavior': 'smooth',
            'left': 0,
            'top': sectionPosition
          })
        })
      }
    }





    // front page only script



    const startStop = () => {
      const button = document.querySelector('.switch');
      const pauseContent = document.querySelector('.pause');
      // console.log(pauseContent);

      if (button) {
        button.addEventListener('click', () => {
          if (slideShowPaused == false) {
            pauseContent.remove();
            button.innerHTML = `
              <div class="play-button-outer">
                <div class="play-button"></div>
              </div>`
            slideShowPaused = true;
            clearInterval(timer);
          } else if (true) {
            const playContent = document.querySelector('.play-button-outer');
            playContent.remove();
            button.innerHTML = `
              <div class="pause">
                <div class="bar one"></div>
                <div class="bar two"></div>
              </div>`
            slideShowPaused = false;
            slideShow();
          }
        })
      }

    }


    const slider = document.querySelector('.auto-slider__content');

    const slideShow = () => {


      if (slider) {
        timer = window.setInterval( () => {

          switch(currentSlide) {
            case 1:
                slider.style.transform = 'translateX(-100%)';
                break;
            case 2:
                slider.style.transform = 'translateX(-200%)';
                break;
            case 3:
                slider.style.transform = 'translateX(-300%)';
                break;
            case 4:
                slider.style.transform = 'translateX(0)';
                break;
            }

            if (currentSlide >= 4) {
              currentSlide = 1;
            } else {
              currentSlide += 1;
            };
        }, 5000)
      }

    }



    const moveSlides = () => {
      const arrowLeft = document.querySelector('.left');
      const arrowRight = document.querySelector('.right');


      document.addEventListener('click', e => {
        if (e.target == arrowLeft) {

          clearInterval(timer);

          switch(currentSlide) {
            case 1:
                slider.style.transform = 'translateX(-300%)';
                currentSlide = 4;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            case 2:
                slider.style.transform = 'translateX(0)';
                currentSlide -= 1;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            case 3:
                slider.style.transform = 'translateX(-100%)';
                currentSlide -= 1;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            case 4:
                slider.style.transform = 'translateX(-200%)';
                currentSlide -= 1;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            }
        } else if (e.target == arrowRight) {
          clearInterval(timer);

          switch(currentSlide) {
            case 1:
                slider.style.transform = 'translateX(-100%)';
                currentSlide += 1;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            case 2:
                slider.style.transform = 'translateX(-200%)';
                currentSlide += 1;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            case 3:
                slider.style.transform = 'translateX(-300%)';
                currentSlide += 1;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            case 4:
                slider.style.transform = 'translateX(0)';
                currentSlide = 1;
                if (!slideShowPaused) {
                  slideShow();
                }
                break;
            }
        }
      })
    }








sideNavChanges();
moveDown();
toggleMenu();
toggleShopMenu();

startStop();
moveSlides();
slideShow();

// showInputBorder();
contactFormSubmit();
}
