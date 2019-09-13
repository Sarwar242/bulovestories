<template>
  <div>
    <a class="ml" @click="followUser">+Follow</a>
  </div>
</template>

<script>
export default {
  props: ["userId"],

  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    followUser() {
      axios.post("follow/" + this.userId).then(response => {
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
