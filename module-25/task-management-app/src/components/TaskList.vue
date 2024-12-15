<template>
    <div>
        <div v-if="showForm" class="add-task-form">
            <input v-model="newTask" placeholder="Enter task name" />
            <button @click="addTask">Add Task</button>
            <p v-if="error">{{ error }}</p>
        </div>

        <p v-if="tasks.length === 0">No tasks available</p>
        <ul v-else>
            <li v-for="(task, index) in tasks" :key="index" :style="{
                backgroundColor: task.completed ? 'lightgreen' : '',
                border: task.completed ? '2px solid red' : '2px solid #ccc'
            }">
                <span>{{ task.name }}</span>
                <div>
                    <button @click="toggleTask(index)">
                        {{ task.completed ? "Undo" : "Complete" }}
                    </button>
                    <button @click="deleteTask(index)">Delete</button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
import { reactive, watch } from "vue";

export default {
    props: {
        showForm: Boolean,
    },
    setup() {
        const tasks = reactive(JSON.parse(localStorage.getItem("tasks")) || []);
        watch(
            () => tasks,
            () => localStorage.setItem("tasks", JSON.stringify(tasks)),
            { deep: true }
        );
        return { tasks };
    },
    data() {
        return {
            newTask: "",
            error: "",
        };
    },
    methods: {
        addTask() {
            if (this.newTask.trim().length < 3) {
                this.error = "Task name must be at least 3 characters.";
                return;
            }
            this.tasks.push({ name: this.newTask.trim(), completed: false });
            this.newTask = "";
            this.error = "";
        },
        toggleTask(index) {
            this.tasks[index].completed = !this.tasks[index].completed;
        },
        deleteTask(index) {
            this.tasks.splice(index, 1);
        },
    },
};
</script>

<style>
.add-task-form {
    margin: 20px 0;
}

input {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-right: 10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin: 10px 0;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 5px;
    transition: 0.3s;
}

button {
    background-color: purple;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #a05dc1;
}
</style>
