new Vue({
  el: "#cardContainerVue",
  data:{
    albumCollectionVue: [],
  },
  mounted(){
    axios.get("http://localhost:8888/php-ajax-dischi/api/dischi.php").then((resp) => {
    this.albumCollectionVue = resp.data.albumsCollection;
    console.log("log funzione axios", resp.data.albumsCollection);
    });
  }
});