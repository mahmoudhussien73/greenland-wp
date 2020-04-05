import $ from 'jquery';

export default class Search {

  constructor(){
    this.body         = document.querySelector('body');
    this.overlayMarkup();
    this.overlay      = document.querySelector('.overlay');
    this.overlayClose = document.querySelector('.btn-close');
    this.overlayOpen  = document.querySelector('.lang .searchIcon');
    this.shoufel      = document.querySelector('.overlay .row');
    this.searchInput  = document.querySelector('.overlay .overlay__search .form__input');
    
    this.events();
    this.isOverlayOpen = false;
    this.isSpinner = false;
    this.setTime;
    this.previousValue;   
  }

  events(){
    this.overlayOpen.addEventListener('click', this.openOverlay.bind(this));
    this.overlayClose.addEventListener('click', this.closeOverlay.bind(this));
    this.body.addEventListener('keydown', this.keyPressDispatcher.bind(this));
    this.searchInput.addEventListener("keyup", this.typingLogic.bind(this));
  }

  // Method
  typingLogic(){

    if(this.searchInput.value != this.previousValue){
        clearTimeout(this.setTime);

        if(this.searchInput.value){

          if(!this.isSpinner){
              this.shoufel.innerHTML = '<div class="spinner-loader"></div>';
              this.isSpinner = true;
          }
          this.setTime = setTimeout( this.getResult.bind(this), 750);
        }else{
          this.shoufel.innerHTML = '';
          this.isSpinner = false;
        }

        
    }
    
    this.previousValue = this.searchInput.value;
  }

  getResult(){

    $.getJSON(greenlandData.rootUri + '/wp-json/greenland/v1/search?term='+ this.searchInput.value, (data) => {
      
    this.shoufel.innerHTML = `
           <div class="col-lg-4 col-12">
             <h2 class="headline_green-small">General Information</h2>
             ${data.generalInfo.length ? '<ul>' : '<p>No Gneneral information matches</p>'}
              ${data.generalInfo.map(item => `<li><a class="overlay-title" href="${item.link}">${item.title}: (${item.type})</a></li>`).join('')}
             ${data.generalInfo.length ? '</ul>' : ''}
           </div>

           <div class="col-lg-4 col-12">
           <h2 class="headline_green-small">Beans Products</h2>
             ${data.beans.length ? '<ul>' : `<p>No Beans Results matches this search <a class="overlay-title" href="${greenlandData.rootUri}/beans">view all Beans</a></p>`}
              ${data.beans.map(item => `<li><a class="overlay-title" href="${item.link}">${item.title}</a></li>`).join('')}
             ${data.beans.length ? '</ul>' : ''}

             <h2 class="headline_green-small">Pesticide Products</h2>
             ${data.pesticides.length ? '<ul>' : `<p>No Pesticide Results matches this search <a class="overlay-title" href="${greenlandData.rootUri}/pesticides">view all Pesticide</a></p>`}
              ${data.pesticides.map(item => `<li><a class="overlay-title" href="${item.link}">${item.title}</a></li>`).join('')}
             ${data.pesticides.length ? '</ul>' : ''}
           </div>

          <div class="col-lg-4 col-12">
            <h2 class="headline_green-small">Humic Products</h2>
             ${data.humics.length ? '<div class="card-img-top">' : `<p>No Pesticide Results matches this search <a class="overlay-title" href="${greenlandData.rootUri}/humics">view all Humic</a></p>`}
              ${data.humics.map(item => `

                    <a href="${item.link}"><img class="img-fluid" src="${item.image}" alt="${item.title}"></a>
                    <p class="overlay-title">${item.title}</p>
                `).join('')}
             ${data.humics.length ? '</div>' : ''}
          </div>
      `;
    });
    this.isSpinner = false;
  }

  keyPressDispatcher(e){

    if(e.keyCode == 83 && !this.isOverlayOpen && !$('input, textarea').is(':focus')){
      this.openOverlay();
    }
    if(e.keyCode == 27 && this.isOverlayOpen){
      this.closeOverlay();
    }

  }

  openOverlay(){
    this.overlay.classList.add('overlay-active');
    this.body.classList.add('no-scrole');
    this.searchInput.value = '';
    setTimeout(() => this.searchInput.focus(), 305);
    this.isOverlayOpen = true;
  }

  closeOverlay(){
    this.overlay.classList.remove('overlay-active');
    this.body.classList.remove('no-scrole');
    this.isOverlayOpen = false;
  }

  overlayMarkup(){
      let markup = `<div class="overlay">
       <div class="container-fluid">
         <div class="overlay__search">
           <form class="form">
              <div class="form__field">
                <a class="form__button btn-close">
                    <svg class="form__icon">
                      <use xlink:href="${greenlandData.imglocation}/assets/img/spotify.svg#icon-cross"></use>
                    </svg>
                </a>
                <input type="text" class="form__input">
              </div>
          </form>
         </div>
         <div class="row">
         </div>
       </div>
    </div>`;
      this.body.insertAdjacentHTML('afterbegin', markup);
  }


}