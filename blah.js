
const modal = document.querySelector("[data-dialog='s-2c3']")
const openModal = document.querySelector("[data-dialog-open='s-2c3']");
const closeModal = document.querySelector("[data-dialog-close='s-2c3']");
const body = document.getElementById('body');
const scrollLock = body.getAttribute("data-scroll-lock");
const iframe = document.querySelector("[data-source='s-2c3']")


openModal.addEventListener("click", (event) => {
    event.preventDefault()
    const scrollLockOn = body

    /* data-scroll triggers overflow y hidden style which disables client scroll */
    scrollLockOn.setAttribute("data-scroll-lock", "enabled")
    /*to get autoplay to work*/
    iframe.setAttribute("src" , "https://www.youtube-nocookie.com/embed/P2GmI9Yn9zY?autoplay=1&loop=1&autopause=0&muted=1")
    modal.showModal()
    
})

closeModal.addEventListener("click", () => {
    const scrollLockOff = body
    /*to stop video on close*/
    iframe.setAttribute("src" , "")

    scrollLockOff.setAttribute("data-scroll-lock", "disabled")
    modal.close()
    
})

//Carousel Expirement

class portfolioCarousel {
    
    version = 1.0;
    width = 0;
    indv = null;
    container = null;
    btn = null;

    constructor(container, indv, list, btn){
        this.container = container
        this.indv = indv;
        this.list = list
        this.btn = btn
  

        this.addEventListeners();
        /*this.snapTo()*/

    
    }

    async addEventListeners(){
        this.addEventListener();
        window.addEventListener('resize', this.alignAdjustment);
    }

  
/*
    //Step 1: Setting Snap Location for active . Preset to active location on refresh
   async snapTo(){
        const mainContainer = document.querySelector("[type-function='c-c1-main-container']"); // Assuming this is your main container element

        let mainContainerLocator = mainContainer.getBoundingClientRect();
        let mainContainerLeftX = mainContainerLocator.left;

        console.log("Main Container X = " + mainContainerLeftX)


   
        const indivContainer = document.querySelector("[ grid-active='active']"); // Element whose left position you want to calculate
        let indivContainerLocator = indivContainer.getBoundingClientRect();
        let indivContainerX = indivContainerLocator.left;

        console.log("Indiv Container X = " + indivContainerX)
        
        let transformDistance =  mainContainerLeftX + indivContainerX;

        console.log("Active Transfrom Distance: " + transformDistance);




        const transformOffset = indivContainerX - mainContainerLeftX ; // Calculate the difference in pixels between elements

    


        
        this.currentOffset -= transformOffset; // 
        this.container.style.transform = 'translateX(' + this.currentOffset + 'px)';
        this.container.style.transition = "all 500ms ease";
      
  
        


    }

    
   */ 
async alignAdjustment(){
    const mainContainer = document.querySelector("[type-function='c-c1-main-container']"); // Assuming this is your main container element
    let mainContainerLocator = mainContainer.getBoundingClientRect();
    let mainContainerLeftX = mainContainerLocator.left;

    const indivContainer = document.querySelector("[ grid-active='active']") // Element whose left position you want to calculate
    let indivContainerLocator = indivContainer.getBoundingClientRect();
    let indivContainerX = indivContainerLocator.left;


const mainWrapper = document.querySelector(".c-c1_main-wrapper")

var style = window.getComputedStyle(mainWrapper);
var matrix = new WebKitCSSMatrix(style.transform);


let positionCalculator = matrix.m41 - indivContainerX + mainContainerLeftX 
mainWrapper.style.transform = 'translateX(' + positionCalculator + 'px)';
mainWrapper.style.transition = "all 300ms ease";


return 

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
        let list = this.list;
        let activeFound = false;
       
        for (var i = 0; i < list.length; i++) {
            let gridActive = list[i].getAttribute("grid-active");

            if (gridActive === "active") {
                // Set current active item to non-active
                list[i].setAttribute("grid-active", "non-active");

                // Set next item to active, wrapping around to the beginning if necessary
                let nextIndex = (i - 1) % list.length;
                list[nextIndex].setAttribute("grid-active", "active");

                activeFound = true;
                break;
            }
        }

        // If no active item was found, set the first item to active
        if (!activeFound && list.length > 0) {
            list[0].setAttribute("grid-active", "active");
        }


        this.alignAdjustment();
  
 
    }
    

   slideToRight(){
        let list = this.list;
        let activeFound = false;
       
        for (var i = 0; i < list.length; i++) {
            let gridActive = list[i].getAttribute("grid-active");

            if (gridActive === "active") {
                // Set current active item to non-active
                list[i].setAttribute("grid-active", "non-active");

                // Set next item to active, wrapping around to the beginning if necessary
                let nextIndex = (i + 1) % list.length;
                list[nextIndex].setAttribute("grid-active", "active");

                activeFound = true;
                break;
            }
        }

        // If no active item was found, set the first item to active
        if (!activeFound && list.length > 0) {
            list[0].setAttribute("grid-active", "active");
        }
       
        
       this.alignAdjustment();

   


}
}


const sliderGridContainer = document.querySelector('.c-c1_main-wrapper ');
const sliderGridItem = document.querySelector("[ grid-active='active']")
const sliderGridItemList= [...document.querySelectorAll("[type-category='grid-item']")]
const sliderBtnContainer = document.querySelector('[slider-category="btn-container"]')


carousel = new portfolioCarousel(
    sliderGridContainer,
    sliderGridItem,
    sliderGridItemList,
    sliderBtnContainer);




/*const testLinks = document.querySelectorAll(".test");

console.log(testLinks);

/*bad code too many event listeners added to it*/
/*testLinks.forEach(link => {
    link.addEventListener("click", function(event) {
        event.preventDefault();
        console.log("Default action prevented for", link);
    });
});

*/



