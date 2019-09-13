<template>
  <section id="search-bar">
    <div class="opening">
      <img src="../../assets/logo.svg" alt="Reencontros">
      <h1>Reencontros</h1>
    </div>
    <div v-if="loaded" class="video">
      <ul class="elements">
        <li v-for="(valor, chave, index) in videoId" :key="index">
          <div class="box">
            <h2>{{valor.video.title}}</h2>
            <div class="vid">
              <iframe width="560" height="315" :src="valor.video.link" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
export default {
  
  data: function() {
    return {
      videos: {},
      busca: '',
      resultado: [],
      videoId: [],
      loaded: false
    }
  },
  methods: {
    getVideo() {

      const url = (`https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&key=AIzaSyAC-i5PFCn835CHGjJL72o75eQPaNY1__Q&playlistId=PLwT4D1bBe04pv3TFkIHVN-lG-hfQqff6Y&maxResults=50`);

      // let params = {
      //   part: 'snippet',
      //   key: 'AIzaSyAC-i5PFCn835CHGjJL72o75eQPaNY1__Q',
      //   q: this.busca (para caso use uma searchbar),
      //   maxResults: 10,
      //   type: 'video'
      //   playlistid curso em video python = PLHz_AreHm4dksnH2jVTIVNviIMBVYyFnH
      // };

      fetch(url)
      .then(r => r.json())
      .then(r => {
        this.videos = r;
        this.resultado = r.items;
        this.resultado.forEach((item) => {
          this.videoId.push({"video": {"title": item.snippet.title, "link":"https://www.youtube.com/embed/" + item.snippet.resourceId.videoId}});
        });
        this.loaded = true;
      });
    },
  },

  // Lifecycle to call getVideo() when the page is loaded
  mounted() {
    this.getVideo();
  }
}
</script>



