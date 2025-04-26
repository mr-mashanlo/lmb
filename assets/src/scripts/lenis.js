import Lenis from 'lenis';

export function initLenis() {
  new Lenis( {
    autoRaf: true,
    smoothWheel: true,
    lerp: 0.1
  } );
}