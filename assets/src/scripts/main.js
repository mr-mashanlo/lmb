import '../styles/main.sass';

import { initHamburger } from './hamburger';
import { initLenis } from './lenis';

window.addEventListener( 'load', () => {
  initHamburger();
  initLenis();
} );