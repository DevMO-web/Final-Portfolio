//Carousel Expirement

class portfolioCarousel {
    
    version = 1.0;
    width = 0;
    indv = null;
    container = null;
    btn = null;

    constructor(container, indv, btn){
        this.container = container
        this.indv = indv;
        this.btn = btn
        this.addEventListener();
    
    }

    async getClientWidth(){

        let w = this.indv.clientWidth;
        console.log(w)
        return w;
      
    }

    addEventListener(){
        this.btn.addEventListener('click', (event) => this.eventHandler(event))
    }

    eventHandler(event){

        const action = event.target.getAttribute('slider-category');
        
        switch (action){
          case 'btn-next':
                  console.log('Next Clicked');
                 this.slideToRight()
                  break;
              case 'btn-prev':
                  console.log('Prev Clicked');
                  this.slideToLeft()
                  break;
      
              default:
                  console.log('Neither Clicked')
                  console.log(event);
               
        }
      }

    slideToLeft(){
        this.container.style.scrollBehavior = "smooth";
        this.container.scrollLeft -= this.indv.clientWidth
     
    }

    slideToRight(){
        this.container.style.scrollBehavior = "smooth";
        this.container.scrollLeft += this.indv.clientWidth
        
    }


}

class navMenu {
    openBtn = null;
    closeBtn = null;
    menuActive = document.querySelector('[data-menu]')

      constructor(openBtn, closeBtn, menuActive){
        this.openBtn = openBtn
        this.closeBtn = closeBtn;
        this.menuActive
        console.log(this)
        this.setEvents()
        this.menuTypeChanger()

    }


    
    setEvents(){
        this.openBtn.addEventListener('click', (event) => this.eventHandler(event))
        this.closeBtn.addEventListener('click',  (event) => this.eventHandler(event))
        window.addEventListener('resize', this.menuTypeChanger);
    }

    eventHandler(){
        const action = event.target.getAttribute('mobile-menu-category');

        switch (action){
            case 'btn-container':
                    console.log('Menu Clicked');
                    this.menuToggle()
                    break;
                case 'close-container':
                    console.log('Close Clicked');
                    this.menuToggle()
                    break;
        
                default:
                    console.log('Neither Clicked')
              
                 
          }
    
    
    }
    menuToggle(){
        const menuToggle = document.querySelector('[mobile-menu-open]')
        const menuToggleChecker = menuToggle.getAttribute("mobile-menu-open")
       

        if(menuToggleChecker == 'false'){
            menuToggle.setAttribute("mobile-menu-open", true)
            this.menuActive.setAttribute("data-menu", "active")
            
        }else{
            this.menuActive.setAttribute("data-menu", "non-active")
            menuToggle.setAttribute("mobile-menu-open", false)
         
        }
    }

    //I can create a different class for this, and when client reaches certain width, then the new eventlisteners are added
    menuTypeChanger(){
    const clientWidth = document.documentElement.clientWidth;
    const menuType =  document.querySelector('[mobile-menu-type]')
    const menuToggle = document.querySelector('[mobile-menu-open]');
    const callStopper = menuType.getAttribute("mobile-menu-type")
    const menuActive = document.querySelector('[data-menu]')

    // Convert 48rem to pixels. Assuming 1rem = 16px (default browser setting)
    var remToPixels = 48 * 16;
    
    switch(true){
        case(clientWidth < remToPixels):
        menuType.setAttribute("mobile-menu-type" , "mobile")
        break;

        //Stops below case from running repeating
        case(callStopper == "desktop"):
        break;
        
        //Re-Sets the navigation menu to default
        case(clientWidth > remToPixels):
        
        menuType.setAttribute("mobile-menu-type", "desktop");
        menuToggle.setAttribute("mobile-menu-open", false)
        menuActive.setAttribute("data-menu", "non-active")
        console.log(menuToggle)
    
    }    
    }
  
}

class sideBarNav{
    
}

const sliderGridContainer = document.querySelector('[slider-category="grid-container"]');
const sliderGridItem = document.querySelector('[slider-category="grid-item"]');
const sliderBtnContainer = document.querySelector('[slider-category="btn-container"]')

carousel = new portfolioCarousel(
    sliderGridContainer,
    sliderGridItem,
    sliderBtnContainer);

const mobileMenuOpen = document.querySelector('[mobile-menu-category="btn-container"]')
const mobileMenuClose = document.querySelector('[mobile-menu-category="close-container"]')

mobileNav = new navMenu(mobileMenuOpen,mobileMenuClose)