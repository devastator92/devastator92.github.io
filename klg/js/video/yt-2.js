// Youtube API / Home2

      var tag = document.createElement('script');
      tag.src = "http://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          playerVars: { 'autoplay': 1, 'controls': 1,'loop': 1,'playlist':'Z96_NmMoh3c','autohide':1,'wmode':'opaque', 'end':5 },
          videoId: 'Z96_NmMoh3c',
          events: {
            'onReady': onPlayerReady}
        });
      }

      function onPlayerReady(event) {
        event.target.mute();
      }
