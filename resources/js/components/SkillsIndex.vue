<script>
import axios from 'axios';

export default {
    data() {
        return {
            skills: [],
            is_loading: true,
            is_maintenance: false,
            error_message: '',
        }
    },
    methods: {
        getAllRecords() {
            axios.get('/api/skills-index')
            .then((res) => {
                this.skills = res.data.skills;
                this.is_loading = false;
                this.is_maintenance = res.data.is_maintenance;
            })
            .catch((res) => {
                console.log(res.response.data.message);
                this.is_loading = false;
                this.error_message = res.response.data.message;
            });
        },
        btnClickEdit(id) {
            alert(id);
        },
        btnClickDelete(id) {
            alert(id);
        }
    },
    mounted() {
        this.getAllRecords();
    }
}
</script>

<template>
    <div>
        <div v-show="error_message != ''">
            <p>{{ error_message }}</p>
        </div>
        <div v-show="is_loading">
            <p>Reading...</p>
        </div>

        <table>
            <thead>
                <td>ID</td>
                <td>名称</td>
            </thead>

            <tbody>
            <tr v-for="skill in skills" :key="skill.id">
                <td>{{ skill.id}}</td>
                <td>{{ skill.name }}</td>
                <td v-show="is_maintenance"><button @click="btnClickEdit(skill.id)">編集</button></td>
                <td v-show="is_maintenance"><button @click="btnClickDelete(skill.id)">削除</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>