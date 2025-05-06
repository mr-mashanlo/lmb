export function initHamburger() {

  const page = document.querySelector( '.page' );
  const button = document.querySelector( '.hamburger-button' );

  if ( !button ) return;

  const hamburger = button.querySelector( '.hamburger' );
  const slider = document.querySelector( '.header__slider' );

  button.addEventListener( 'click', () => {
    page.classList.toggle( 'unscrollable' );
    hamburger.classList.toggle( 'active' );
    slider.classList.toggle( 'header__slider--active' );
  } );

}