Vue.use(VueResource);

var content = '/ondersteuning/index.json';

function param(name) {
  return decodeURIComponent((location.search.split(name + '=')[1] || '').split('&')[0]).replace(/\+/g, ' ');
}


var fuseOptions = {
  include: ["score", "matches"],
  shouldSort: true,
  threshold: 0.30,
  maxPatternLength: 32,
  minMatchCharLength: 1,
  keys: [
    "title",
    //"content",
    "searchtags",
    // "blocks",
    // "blocks.title",
    // "description",
    "items.title",
    // "items.title.value",
    // "items.description",
    // "items.description.value"
  ]
}

const store = new Vuex.Store({
  modules: {
    i18n: vuexI18n.store
  }
})

const searchQuery = param("globalsearch");

new Vue({
  el: '#pagesearch',
  data: {
    fuse: false,
    filter: '',
    resultsOriginal: [],
    results: [],
    hasSearchQuery: false,
    searchQuery: null,
    searchQueryResults: [],
    hideResults: false,
    arrowCounter: -1
  },

  mounted() {
    if (searchQuery.length) {
      this.showsearchQueryResults(searchQuery)
    }
  },

  computed: {

    filteredPosts() {
      this.results = this.copyObj(this.resultsOriginal)
      let fuseResults = new Fuse(this.results, fuseOptions).search(this.filter)
      let results = []
      Object.values(fuseResults).forEach(result => {
        results.push(result.item)
      })
      return results
    },
    getPosts() {
      this.results = this.copyObj(this.resultsOriginal)
      return (this.filter === '') ? this.results : this.filteredPosts
    },
      
    showPageResults() {
      if(this.searchQuery !== this.filter ) {
        this.searchQuery = null;
        return true;
      }
    },

    showInlineResults() {
      if(!this.filter) {
        return false;
      }

      if(this.searchQuery !== this.filter ) {
        this.searchQuery = null;
        return true;
      }
    }


  },
  created() {
    this.loadData()
  },
  watch: {
    filter: _.debounce(function () {
      if (this.filter.length == 0) {
        return;
      }
    }, 500)
  },
  methods: {

    showsearchQueryResults(query) {
      this.hasSearchQuery = true;
      this.searchQuery = query;
      this.filter = query;
    },

    namespace(object, path) {
      return path.split('.').reduce((value, index) => {
        return value[index]
      }, object)
    },

    setValue(object, path, newValue) {
      let paths = path.split('.')
      let count = 0
      paths.reduce((value, index) => {
        count++
        if (count >= paths.length) {
          value[index] = newValue
        } else {
          return value[index]
        }
      }, object)
    },

    copyObj(obj) {
      return JSON.parse(JSON.stringify(obj))
    },

    loadData() {
      this.$http.get(content).then(response => {
        this.results = this.copyObj(response.body)
        this.resultsOriginal = this.copyObj(this.results)
      })
    },

    onArrowDown() {
      if (this.arrowCounter < this.results.length) {
        this.arrowCounter = this.arrowCounter + 1;
      }
    },
    onArrowUp() {
      if (this.arrowCounter > 0) {
        this.arrowCounter = this.arrowCounter - 1;
      }
    },
    onEnter(event) {

      if (this.arrowCounter === -1) {
        this.submitForm();
        return;
      }

      event.preventDefault();
      const result = this.getPosts[this.arrowCounter];
      window.location.href = result.permalink;
      this.arrowCounter = -1;

    },

    submitForm() {

      let query = this.filter;
      let url = window.location.href.split("?")[0];

      window.location.href = url + "?globalsearch="+query+"#results"

      // this.$refs.form.submit();

    }

  }
})