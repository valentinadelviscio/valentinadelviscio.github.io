

  import Swup from "swup";
  import SwupFadeTheme from "@swup/fade-theme";   
  import SwupPreloadPlugin from '@swup/preload-plugin';




(function ($) {
    const swup = new Swup(options);
    const options = {
        animateHistoryBrowsing: true,
        animationSelector: '[class*="swup-transition-"]',
        containers: ["#swup"],
        cache: false,
        preload: true,
        linkSelector:
          'a[href^="' +
          window.location.origin +
          '"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])',
        skipPopStateHandling: function(event) {
          if (event.state && event.state.source == "swup") {
            return false;
          }
          return true;
        }
      };

   


}(jQuery));



if (document.readyState === 'complete' || (document.readyState !== 'loading' && !document.documentElement.doScroll)) {
    initApp();
  } else {
    document.addEventListener('DOMContentLoaded', initApp);
  }
  
  // Init app
  const initApp = () => {
    initComponentsOnce();
    initComponents();
    initSwup();
  }
  



  const initSwup = () => {
    console.log('initSwup');
  
    const swup = new Swup({
      containers: ["#swup"],
      cache: false,
      plugins: [new SwupBodyClassPlugin()]
      [new SwupFadeTheme()]
      [new SwupPreloadPlugin()]
    });
  
    swup.on('contentReplaced', function () {
      window.scrollTo(0, 0);
      initComponents();
    });
}

  

  document.addEventListener("DOMContentLoaded", () => {
    // run whatever we need
});
// this event runs for every page view after initial load
swup.on('contentReplaced', init);

swup.on('pageView', function() {
    dataLayer.push({
      event: 'VirtualPageview',
      virtualPageURL: window.location.pathname,
      virtualPageTitle: document.title
    });
  });
  
  swup.on('contentReplaced', function() {
    swup.options.containers.forEach((selector) => {
      // load scripts for all elements with 'selector'
    });
  });

  init();

  swup.on('contentReplaced', init);

  document.addEventListener('swup:contentReplaced', (event) => {
    // do something when content is replaced
  });
  
  document.addEventListener('swup:animationInDone', (event) => {
    // do something when content is replaced
  });

  
  document.addEventListener('swup:pageView', (event) => {
    // do something when content is replaced
  });



