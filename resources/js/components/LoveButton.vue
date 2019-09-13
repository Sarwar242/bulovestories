<template>
  <div>
    <button @click="loveStory" class="btnt btn-primary glyphicon glyphicon-heart-empty"></button>
  </div>
</template>

<script>
export default {
  props: ["userId"],

  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    loveStory() {
      axios.post("love/" + this.storyId).then(response => {
        alert(response.data);
      });
    }
  }
};
</script>

<style>
.ml {
  margin: 10px;
}
</style>
