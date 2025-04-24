export function initHamburger() {

  const body = document.body;
  const button = document.querySelector('.hamburger-button');

  if ( !button ) return;

  const hamburger = button.querySelector( '.hamburger' );
  const slider = document.querySelector( '.header__slider' );

  button.addEventListener('click', () => {
    body.classList.toggle( 'hidden' );
    hamburger.classList.toggle( 'active' );
    slider.classList.toggle( 'header__slider--active' );
  } );

}