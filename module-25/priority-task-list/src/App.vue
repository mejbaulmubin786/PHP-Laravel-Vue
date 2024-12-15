<script setup>

import { ref, watch } from 'vue';
const tasks = ref(JSON.parse(localStorage.getItem('tasks')) || []);
const taskName = ref('');
const taskPriority = ref('Select Priority');
const addTask = () => {
  if (taskName.value.trim() === '') return;

  tasks.value.push({ name: taskName.value.trim(), priority: taskPriority.value });
  taskName.value = '';
  taskPriority.value = 'Select Priority';
  saveTasksToLocalStorage();
};
const saveTasksToLocalStorage = () => {
  localStorage.setItem('tasks', JSON.stringify(tasks.value));
};

watch(tasks, saveTasksToLocalStorage, { deep: true });

const groupedTasks = {
  High: () => tasks.value.filter(task => task.priority === 'High').sort((a, b) => a.name.localeCompare(b.name)),
  Medium: () => tasks.value.filter(task => task.priority === 'Medium').sort((a, b) => a.name.localeCompare(b.name)),
  Low: () => tasks.value.filter(task => task.priority === 'Low').sort((a, b) => a.name.localeCompare(b.name)),
};
</script>

<template>
  <div class="container">
    <h1>Priority Task List</h1>
    <form @submit.prevent="addTask">
      <input v-model="taskName" type="text" placeholder="Task Name" />
      <select v-model="taskPriority">
        <option value="Select Priority" disabled selected>Select Priority</option>
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option value="Low">Low</option>
      </select>
      <button type="submit">Add Task</button>
    </form>

    <div v-for="priority in ['High', 'Medium', 'Low']" :key="priority">
      <h2>{{ priority }} Priority</h2>
      <ul>
        <li v-for="task in groupedTasks[priority]()" :key="task.name">{{ task.name }}</li>
        <li v-if="groupedTasks[priority]().length === 0">No tasks available in this category</li>
      </ul>
    </div>
  </div>
</template>

<style scoped>
.container {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  font-family: Arial, sans-serif;
}

form {
  display: flex;
  gap: 10px;
  margin-bottom: 20px;
}

form input,
form select {
  flex: 1;
  padding: 5px;

}

form button {
  padding: 5px 10px;
}

h1 {
  text-align: center;
}

h2 {
  margin-top: 20px;
}

ul {
  list-style-type: none;
  padding: 0;
}

ul li {
  padding: 5px 0;
}
</style>