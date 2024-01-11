<script lang="ts">
import axios from 'axios';
import { defineComponent, onMounted, reactive, toRefs } from 'vue';

interface Skill {
    id: string
    name: string
}
class SkillIndex {
    skills: Skill[] = [];
    is_loading: boolean = true;
    is_maintenance: boolean = false;
    error_message: string = '';
}
export default defineComponent({
    setup(props, context) {
        const skillIndex = reactive(new SkillIndex());

        onMounted(() => {
            getAllRecords();
        });

        // スキル一覧を取得
        const getAllRecords = (): void => {
            axios.get('/api/skills-index')
            .then((res) => {
                skillIndex.skills = res.data.skills;
                skillIndex.is_loading = false;
                skillIndex.is_maintenance = res.data.is_maintenance;
            })
            .catch((res) => {
                console.log(res.response.data.message);
                skillIndex.is_loading = false;
                skillIndex.error_message = res.response.data.message;
            });
        }

        // 編集ボタンを押下
        const btnClickEdit = (id: string): void => {
            alert(id);
        }

        // 削除ボタンを押下
        const btnClickDelete = (id: string): void => {
            alert(id);
        }

        return {
            getAllRecords,
            btnClickEdit,
            btnClickDelete,
            ...toRefs(skillIndex),
        }
    },
})
</script>

<template>
    <div>
        <div v-show="error_message != ''">
            <p>{{ error_message }}</p>
        </div>
        <div v-show="is_loading">
            <p>Reading...</p>
        </div>

        <!-- スキル一覧 -->
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