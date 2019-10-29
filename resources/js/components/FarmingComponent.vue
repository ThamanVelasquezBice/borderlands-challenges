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
        <div v-if="!loading && submitted">
            <div class="content">
                <h3 class="text-center" style="color: red">
                    {{ legendary.flavor_text }}
                </h3>
                <h3>Farm the {{ legendary.name }} it drops from {{ loot_source.name }} at {{ region }}</h3><br>
                <img class="borderlands-image" :src="legendary.image_url" />
                <div style="padding: 1em 0 1em 0;" class="row">
                    <div class="col">
                        <a class="btn btn-primary borderlands-btn" href="#" @click="getItem">Retry</a>
                    </div>
                </div>
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
                },
                legendary: '',
                loot_source: '',
                region: ''
            }
        },
        methods: {
            getItem() {
                this.loading = true;
                axios.post('/farm', {
                    game_id: this.form.game_id,
                    needs_to_be_weapon: this.form.needs_to_be_weapon
                })
                .then(response => {
                    this.submitted = true;
                    this.loading = false;
                    this.legendary = response.data.legendary;
                    this.loot_source = response.data.loot_source;
                    this.region = response.data.region;
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
