<template>
  <div>
    <button class="btn btn-primary glyphicon glyphicon-heart-empty" @click="loveStory"></button>
  </div>
</template>

<script>
export default {
  props: ["storyId"],

  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    loveStory() {
      axios.post("/love/" + this.storyId).then(response => {
        alert(response.data);
      });
    }
  }
};
</script>

<style>
.ml {
  margin-right: 10px;
}
</style>
