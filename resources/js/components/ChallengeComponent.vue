<template>
    <div class="container">
        <div class="text-left" v-if="!loading && !submitted">
            <label for="game">What game are you playing?</label>
            <select class="form-control" v-model="form.game_id" name="game_id" id="game">
                <option v-for="game in parsed_games" :value="game.id">{{ game.title }}</option>
            </select>
            <br>
            <input v-model="form.choose_character" type="checkbox" name="choose_character"> Am I choosing your character?
            <br>
            <label for="bonus_rules">How many bonus rules? (there is a limit of 4)</label>
            <select v-model="form.bonus_rules" class="form-control" name="bonus_rules" id="bonus_rules">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br>
            <div class="text-right">
                <input class="btn btn-primary borderlands-btn" type="submit" @click="generateChallenge" value="Generate me a challenge!">
            </div>
        </div>
        <div v-if="submitted && !loading">
            <div class="content">
                <h3>{{ challenge }}</h3>
                <h5>{{ description }}</h5>
                <div v-if="bonus_rules">
                    <h3>Bonus Rules</h3>
                    <ul style="text-align: left;">
                        <li v-for="bonus_rule in bonus_rules">{{ bonus_rule.name.split('_').join(' ') }}: {{ bonus_rule.description.description }}</li>
                    </ul>
                </div>
                <div style="padding-top: 1em;" class="row">
                    <div class="col">
                        <a class="btn btn-primary borderlands-btn" href="#" @click="generateChallenge">Retry</a>
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
                    choose_character: false,
                    bonus_rules: 0
                },
                challenge: '',
                description: '',
                bonus_rules: ''
            }
        },
        methods: {
            generateChallenge() {
                this.loading = true;
                axios.post('/generate/challenge', {
                    game_id: this.form.game_id,
                    choose_character: this.form.choose_character,
                    bonus_rules: this.form.bonus_rules
                })
                .then((response) => {
                    this.challenge = response.data.challenge,
                    this.description = response.data.description,
                    this.bonus_rules = response.data.bonus_rules
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
