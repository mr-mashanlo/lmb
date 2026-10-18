export function initHamburger() {

  const button = document.querySelector( '.hamburger' );
  const menu = document.querySelector( '.header__menu' );
  const body = document.body;

  if ( !button ) return;

  button.addEventListener( 'click', () => {
    button.classList.toggle( 'active' );
    menu.classList.toggle( 'header__menu--active' );
    body.classList.toggle( 'body--unscrollable' );
  } );

}