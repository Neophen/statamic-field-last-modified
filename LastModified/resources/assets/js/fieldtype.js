Vue.component("last_modified-fieldtype", {
  mixins: [Fieldtype],

  template: "<div>{{lastModifiedText}}</div>",

  data: function() {
    return {
      lastModified: '',
      autoBindChangeWatcher: false // Disable the automagic binding
    };
  },

  ready: function() {
    if(this.entryId === 'never'){
      return;
    }

    var route = "/!/LastModified/value?id=" + this.entryId;
    this.$http.get(route, function(response) {
      this.lastModified = response; // Manipulate as required.
      this.bindChangeWatcher(); // Bind manually once you're ready.
    });
  },

  computed: {
    entryId() {
      return this.$parent.$parent.data.id;
    },
    lastModifiedText() {
      return this.lastModified || 'never';
    }
  }
});
