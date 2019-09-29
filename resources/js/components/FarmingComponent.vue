<template>
    <div class="container">
        <div v-if="!loading && !submitted" class="text-left">
            <label for="game">What game are you playing?</label>
            <select class="form-control" v-model="form.game_id" id="game">
                    <option v-for="game in parsed_games" :value="game.id">{{ game.title }}</option>
            </select>
            <br>
            <input type="checkbox" v-model="form.needs_to_be_weapon"> Does the item need to be a weapon?
            <br>
            <div class="text-right">
                <input class="btn btn-primary borderlands-btn" type="submit" @click="getItem" value="Get me a legendary!">
            </div>
        </div>

        <font-awesome-icon v-if="loading" style="margin-top: .5em;" :icon="['fas', 'spinner']" spin size="6x" />
    </div>
</template>

<script>
    export default {
        props: ['games'],
        data() {
            return {
                parsed_games: '',
                loading: false,
                submitted: false,
                form: {
                    game_id: 1,
                    needs_to_be_weapon: false,
                }
            }
        },
        methods: {
            getItem() {
                this.loading = true;
                axios.post('/farm', {
                    game_id: this.form.game_id,
                    needs_to_be_weapon: this.form.needs_to_be_weapon
                })
                .then((response) => {
                    this.submitted = true;
                    this.loading = false;
                })
                .catch((error) => {
                    alert(error.response.data.message);
                    this.loading = false;
                })
            }
        },
        mounted() {
            this.parsed_games = JSON.parse(this.games);
        }
    }
</script>
