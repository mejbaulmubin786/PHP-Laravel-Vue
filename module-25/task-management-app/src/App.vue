<template>
  <div id="app">
    <h1>Task Management App</h1>
    <button @click="toggleForm">{{ showForm ? "Hide" : "Show" }} Add Task Form</button>
    <TaskList :showForm="showForm" />
  </div>
</template>

<script>
import TaskList from "./components/TaskList.vue";

export default {
  components: { TaskList },
  data() {
    return {
      showForm: false,
    };
  },
  methods: {
    toggleForm() {
      this.showForm = !this.showForm;
    },
  },
};
</script>

<style>
#app {
  text-align: center;
  font-family: Arial, sans-serif;
  color: #f0f0f0;
  background-color: #222;
  padding: 20px;
}

button {
  background-color: #444;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  margin: 10px;
}

button:hover {
  background-color: #666;
}
</style>
