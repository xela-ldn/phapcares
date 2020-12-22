<template>
    <div class="row">
        <div class="col-md-3">
            <div class="nav-wrapper">
                <ul class="list-unstyled">
                    <li class="pc-text-bold">Who we are</li>
                    <li><a v-on:click="whoContent = 'history', history_pressed = true, officers_pressed = false"  v-bind:class="{pc_text_bold:history_pressed}" href="/whoweare/history">History / Profile</a></li>
                    <li><a v-on:click="whoContent = 'officers', officers_pressed = true, history_pressed = false" v-bind:class="{pc_text_bold:officers_pressed}" href="/whoweare/officers">Officers</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-9">
            <component v-bind:is="whoContent"></component> 
        </div>
    </div>
</template>

<script>

    import history from './history.vue';
    import officers from './officers.vue';

    export default {
        
        components: {
            'history':history,
            'officers':officers
        },
        data() {
            
            return {
                whoContent:'history',
                history_pressed:true,
                officers_pressed:false
            }
            
        }, methods:{


        }
        
    }

 

    
</script>