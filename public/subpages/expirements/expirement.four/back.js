

//Carousel Expirement

class portfolioCarousel {
    
    version = 1.0;
    items = [];
    size = 0
    gap = 0
    width = 0;
    indv = null;
    container = null;
    btn = null;

    constructor(container, indv, list, btn){
        this.container = container
        this.indv = indv;
        this.list = list
        this.btn = btn
        this.currentOffset = 0; 
        this.addEventListener();
        this.getSnapToBaseline()
        this.getClientWidth();
        this.getCount()
        this.snapTo()
        
    
    }


    async getCount(){

        let gridList = this.list;
 
        let gridListCount = gridList.length
        console.log(gridListCount);

        let w = this.indv.clientWidth;

        console.log(gridListCount * w);
         return gridListCount * w;
     
 
    }

    async getClientWidth(){

        let w = this.indv.clientWidth;
        console.log(w)

        let t =  window.innerWidth;

        console.log(t)
    

        window.addEventListener('resize', this.lineAdjuster);
     
        

        return w;

      
    }

    getSnapToBaseline(){
        const active = document.querySelector(".active"); // Element whose left position you want to calculate

        let rectr3 = active.getBoundingClientRect();
        let leftr3 = rectr3.left;

        console.log("Snap Base Line: " + leftr3);
    
    }


    snapTo(){
         let indivBox = document.querySelector(".c-c1_main-container"); // Assuming this is your main container element

        const testing = document.querySelector(".testing"); // Element where you apply the transform
       


        let redLine = indivBox.getBoundingClientRect();
        let redLineX = redLine.left;
        console.log("redLineX Cordinate: " + redLineX);

    // Calculate offset in pixels based on leftr
    testing.style.left = redLineX + 'px'; // Apply as pixels

   

    const active = document.querySelector(".active"); // Element whose left position you want to calculate
    let indivContainer = active.getBoundingClientRect();
    let indivContainerX = indivContainer.left;
    

    let OffestTransform = redLineX + indivContainerX;

    console.log("Active Transfrom Distance: " + OffestTransform);




    const transformDistance = indivContainerX - redLineX; // Calculate the difference in pixels between elements

    


        
        this.currentOffset -= transformDistance; // 
        this.container.style.transform = 'translateX(' + this.currentOffset + 'px)';
        this.container.style.transition = "all 500ms ease";
      
    
       
    
    return 


    }

    
    
lineAdjuster(){
    let indivBox = document.querySelector(".c-c1_main-container"); // Assuming this is your main container element

    const testing = document.querySelector(".testing"); // Element where you apply the transform
   


    let redLine = indivBox.getBoundingClientRect();
    let redLineX = redLine.left;


    const active = document.querySelector(".active"); // Element whose left position you want to calculate
    let indivContainer = active.getBoundingClientRect();
    let indivContainerX = indivContainer.left;







// Calculate offset in pixels based on leftr
testing.style.left = redLineX + 'px'; // Apply as pixels


let test = testing.style.left


let f = document.querySelector(".c-c1_main-wrapper")

var style = window.getComputedStyle(f);
var matrix = new WebKitCSSMatrix(style.transform);


console.log('translateX: ', matrix.m41);

let ff = matrix.m41 - indivContainerX + redLineX
f.style.transform = 'translateX(' + ff + 'px)';
f.style.transition = "all 100ms ease";
console.log(test)

}


    
    
  


    async getTotalClientWidth(){
        
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
        //change to transform
        /*
        this.container.style.scrollBehavior = "smooth";
        this.container.scrollLeft -= this.indv.clientWidth*/
        let test = this.indv.clientWidth;
        let testinc = test + 10
this.currentOffset +=  testinc; // Increment the offset by the width
this.container.style.transform = 'translateX(' + this.currentOffset + 'px)';
this.container.style.transition = "all 500ms ease";
console.log(test);

   
    }

    slideToRight(){
     //Testing

     let test = this.indv.clientWidth;
     let testinc = test + 10
this.currentOffset -=  testinc; // Increment the offset by the width
this.container.style.transform = 'translateX(' + this.currentOffset + 'px)';
this.container.style.transition = "all 500ms ease";
console.log(test);
    }


}



const sliderGridContainer = document.querySelector('.c-c1_main-wrapper ');
const sliderGridItem = document.querySelector("[type-first='grid-size']")
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



