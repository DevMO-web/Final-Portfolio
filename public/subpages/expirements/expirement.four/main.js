
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

class navMenu{
    version = 1.0;
    
    constructor(container, btn) {
        this.container = container
        this.btn = btn
        this.addEventListeners();
       


    }

    addEventListeners(){
        this.addEventListener();
    }
    
    addEventListener(){
        const btn = this.btn
        btn.addEventListener('click', (event) => this.eventHandler(event))
    
    }

    eventHandler(event){

        const action = event.target.getAttribute('nav-component-action');
        
        switch (action){
          case 'closed':
                    this.openMenu(event)
                  break;
              case 'open':
                  this.closeMenu(event)
                  break;
      
              default:
                  console.log(event);
               
        }
      }

    
    openMenu(event){
        let mainContainer = this.container
        const btn = event.target;
        mainContainer.setAttribute("nav-component-active" , "active")
        btn.setAttribute("nav-component-action", "open")
    }


    closeMenu(event){
        let mainContainer = this.container
        const btn = event.target;
        mainContainer.setAttribute("nav-component-active" , "non-active")
        btn.setAttribute("nav-component-action", "closed")
    }
    
}

const mainNavContainer = document.querySelector('[nav-component="container"]')
const mainNavBtnContainer = document.querySelector('[nav-component="btn-container"]')
newNavMenu = new navMenu(mainNavContainer, mainNavBtnContainer)

class mainCarousel {
    
    version = 1.0;
    indv = null;
    container = null;
    wrapper = null
    btn = null;

    constructor(container, wrapper, indv, list, btn){
        this.container = container
        this.wrapper = wrapper
        this.indv = indv;
        this.list = list
        this.btn = btn
        this.addEventListeners();
        /*this.snapTo()*/

    
    }

    async addEventListeners(){
        this.addEventListener();
        //Using arrow function fixed this.container statement in alignAdjustment()
        window.addEventListener('resize', () => this.alignAdjustment());
    }

  
    /*
    //Testing Purpose: Setting Snap Location for active . Preset to active location on refresh
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
async getActiveElement() {
        let list = this.list;
        let activeElement = null;
       
        /*Loops through indivList to find the attribute with grid-active = active. If
        it finds the active atr, it will assign it to active element variable*/
        for (var i = 0; i < list.length; i++) {
            let gridActive = list[i].getAttribute("grid-active");
    
            if (gridActive === "active") {
                activeElement = list[i];
                break; // Exit the loop once the active element is found
            }
        }
    
        if (!activeElement) {
            console.error("No active grid item found.");
        }
    
        //Return the active element to be used in other methods
        return activeElement;
    }

async alignAdjustment(){
   
    //First Part = obtain left X coordinate of the assinged container. 
    const mainContainer = this.container // Assuming this is your main container element
    let mainContainerLocator = mainContainer.getBoundingClientRect(); //Provides information about the size of an element
    let mainContainerLeftX = mainContainerLocator.left; //Left side info of element

    const activeElement = await this.getActiveElement();
    if (!activeElement) {
    return;
    }
  
    //Second Part = activeElement is the active indvContainer touching the left side of main container. 
    const indivContainer = activeElement // Element whose left position you want to calculate
    let indivContainerLocator = indivContainer.getBoundingClientRect();
    let indivContainerX = indivContainerLocator.left;


    //Third Part = Obtains the current transform value within the CSS Matrix
    const mainWrapper = this.wrapper

    var style = window.getComputedStyle(mainWrapper);
    var matrix = new WebKitCSSMatrix(style.transform);
    
    //matrix.m41 represents the x-component of the translation vector. 
    let positionCalculator = (matrix.m41 - indivContainerX) + mainContainerLeftX 
    
    //Adjusts the active element to align with starting point of the grid wrapper
    mainWrapper.style.transform = 'translateX(' + positionCalculator + 'px)';
    mainWrapper.style.transition = "all 300ms ease";

   

    return 

}

    addEventListener(){
        this.btn.addEventListener('click', (event) => this.eventHandler(event))
    }

    eventHandler(event){

        //Action finds this attribute and runs case by case options to continue
        const action = event.target.getAttribute('carousel-component');

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


    //Tranform Wrapper to Left
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
    
    //Tranform Wrapper to Right
   slideToRight(){
        let list = this.list;
        let activeFound = false;
       
        for (var i = 0; i < list.length; i++) {
            let gridActive = list[i].getAttribute("grid-active");

            if (gridActive === "active") {
                // Set current active item to non-active
                list[i].setAttribute("grid-active", "non-active");

                // Set next item to active, wrapping around to the beginning if necessary
                let nextIndex = (i + 1) ;

                if(nextIndex < list.length){
                    list[nextIndex].setAttribute("grid-active", "active");

                    activeFound = true;
                    break;
                }
         
            }
        }

        // If no active item was found, set the first item to active
        if (!activeFound && list.length > 0) {
            list[0].setAttribute("grid-active", "active");
        }
       
        
       this.alignAdjustment();

       
   


}
}


const sliderGridContainer = document.querySelector('[carousel-component="container"]');
const sliderGridWrapper = document.querySelector('[carousel-component="wrapper"]');
const sliderGridItem = document.querySelector('[ grid-active="active"]')
const sliderGridItemList= [...document.querySelectorAll('[carousel-component="grid-item"')]
const sliderBtnContainer = document.querySelector('[carousel-component="btn-container"]')


carousel = new mainCarousel(
    sliderGridContainer,
    sliderGridWrapper,
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




class mainTab{
    version = 1.0;
    

    constructor(content, btnContainer, btn){
        this.content = content
        this.btnContainer = btnContainer
        this.btn = btn
        
       

    
        this.addEventListeners()
    }

//Set all buttons to non-active.
disableIndicator(){
    let tabButtons = this.btn
    tabButtons.forEach(btn => {
        btn.setAttribute("btn-active", "non-active");
      });
}



addEventListeners(){
    this.addEventListener();
}

addEventListener(){
    let btn = this.btnContainer 
    btn.addEventListener('click', (event) => this.eventHandler(event))

}

    eventHandler(event){

        const action = event.target.getAttribute('btn-id');

        switch (action){

        case '1':
                  console.log('The 1 Button');
                  this.showTab(event)
                  break;
        case '2':
                  console.log('The 2 Button');
                  this.showTab(event)
                  break;
        case '3':
                  console.log('The 3 Button');
                  this.showTab(event)
                  break;
      
        default:
                  console.log('Neither Clicked')
                  console.log(event);
               
        }
    }


    //Activated to Specific Btn Clicked,
   showTab(event){

        //First Step: Set all btn to non-active
        this.disableIndicator()

        //Second Step: Loop through tab content to find matching id.
        const btn = event.target;
        const btnID = btn.getAttribute("btn-id")

        
        for (let i = 0; i < tabContent.length; i++) {
            
            const contentID = tabContent[i].getAttribute("tab-id");
            
        //If match is found
            if (btnID === contentID) {
               
    
            tabContent.forEach(content => {
                
                //Sets all tabs to non-active
                content.setAttribute("tab-active", "non-active")});

                //Sets current button to active
                btn.setAttribute("btn-active", "active")
                
                //Sets current tab to active
                tabContent[i].setAttribute("tab-active", "active");
                break;
            
                
        }

       
    }


}


}

const tabContent = document.querySelectorAll('[tab-component="main-container"]')
const tabBtnContainer = document.querySelector('[tab-component="btn-container"]')
const tabBtns = document.querySelectorAll('[tab-component="btn"]')


tab = new mainTab (tabContent, tabBtnContainer, tabBtns )


