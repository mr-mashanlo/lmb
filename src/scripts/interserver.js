export const initIntersectionObserver = () => {

  const handleEntry = entries => {
    entries.forEach( entry => {
      if ( entry.isIntersecting ) {
        if ( entry.target.tagName === 'H2' ) {
          console.log( entry.target.tagName );
        } else {
          console.log( entry.target.tagName );
        }
      };
    } );
  };

  const observer = new IntersectionObserver( handleEntry, { threshold: 0, rootMargin: '0px 0px -100%' } );
  const titles = document.querySelectorAll( '.single-post .content > *' );
  titles.forEach( section => observer.observe( section ) );

};